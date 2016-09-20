<?php

namespace App\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Bundle\CoreBundle\Document\Product;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        dump('hi');

        
        //local
        $test = $this->container->get('knp_gaufrette.filesystem_map')->get('bar');


        dump($test->read('config.php'));
        exit;

        //s3
        dump($this->get('profile_photos_filesystem')->listKeys());
        exit;

        return $this->render('AppCoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
