<?php

namespace App\Bundle\CoreBundle\Services;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    const PRODUCT_FOLDER_SMALL = 'small';

    const PRODUCT_FOLDER_MEDIUM = 'medium';

    const PRODUCT_FOLDER_LARGE = 'large';

    const PRODUCT_FOLDER_THUMBNAIL = 'thumbnail';

    const SIZE_THUMBNAIL_WIDTH = 200;

    const SIZE_THUMBNAIL_HEIGHT = 225;

    const SIZE_SMALL_WIDTH = 200;

    const SIZE_SMALL_HEIGHT = 225;

    const SIZE_MEDIUM_WIDTH = 400;

    const SIZE_MEDIUM_HEIGHT = 451;

    const SIZE_LARGE_WIDTH = 600;

    const SIZE_LARGE_HEIGHT = 677;

    // web/assets/images
    private $image_directory;

    //service container
    private $container;

    public function __construct($image_directory,$container)
    {
        $this->image_directory = $image_directory;
        $this->container = $container;
    }

    public function upload(UploadedFile $imageFile)
    {
        $fileName = uniqid().'.'.$imageFile->guessExtension();
        
        $imageFile->move(
            $this->image_directory . '/uploads/',
            $fileName
        );

        $imageFullPath = 'assets/images/uploads/'.$fileName;
        $x = $this->createImageWithDifferentSizes($imageFullPath, 'folder');
        
        return $fileName;
    }


    public function createImageWithDifferentSizes ($imageFullPath, $folder)
    {
        $createdFiles = array();
        $imageDirectory = $this->image_directory . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $folder;
        
        $imageSizes = array (
            self::PRODUCT_FOLDER_THUMBNAIL => array (
                'width'=> self::SIZE_THUMBNAIL_WIDTH,
                'height'=> self::SIZE_THUMBNAIL_HEIGHT,
            ),
            self::PRODUCT_FOLDER_SMALL => array (
                'width'=> self::SIZE_SMALL_WIDTH,
                'height'=> self::SIZE_SMALL_HEIGHT,
            ),
            self::PRODUCT_FOLDER_MEDIUM => array (
                'width'=> self::SIZE_MEDIUM_WIDTH,
                'height'=> self::SIZE_MEDIUM_HEIGHT,
            ),
            self::PRODUCT_FOLDER_LARGE => array (
                'width'=> self::SIZE_LARGE_WIDTH,
                'height'=> self::SIZE_LARGE_HEIGHT,
            ),
        );

        $pathParts = pathinfo($imageFullPath);
        $imageManipulator = $this->container->get("app_core.service.image_manipulation");
        
        foreach ($imageSizes as $folderName => $imageSize) {

            if (!file_exists($imageDirectory . DIRECTORY_SEPARATOR . $folderName)) {
                mkdir($imageDirectory . DIRECTORY_SEPARATOR . $folderName , 0777);
            }

            $newWidth = $imageSize['width'];
            $newHeight = $imageSize['height'];
            $imageToReSize = 'assets/images/uploads/folder' . DIRECTORY_SEPARATOR . $folderName . DIRECTORY_SEPARATOR . $pathParts['basename'];

            
            $imageManipulator->writeThumbnail(
                DIRECTORY_SEPARATOR.ltrim($imageFullPath, 'web/'),
                DIRECTORY_SEPARATOR.ltrim($imageToReSize, 'web/'),
                array(
                "filters" => array(
                    "relative_resize" => array(
                        "heighten" => $newHeight,
                        "widen" => $newWidth,
                    ),
                    "background" => array("color" => "#fff")
                ),
            ));

            $createdFiles[] = new File($imageToReSize);
        }
        /*foreach ($createdFiles as $file) {
            $this->uploadToCloud ($file);
        }*/

        return $createdFiles;
    }
}