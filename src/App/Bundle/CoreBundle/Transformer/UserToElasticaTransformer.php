<?php

namespace App\Bundle\CoreBundle\Transformer;

use Carbon\Carbon;
use FOS\ElasticaBundle\Doctrine\AbstractElasticaToModelTransformer;
use Doctrine\ORM\Query;

use Elastica\Document;
use FOS\ElasticaBundle\Transformer\ModelToElasticaTransformerInterface;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;
use Symfony\Component\Validator\Constraints\DateTime;

class UserToElasticaTransformer implements ModelToElasticaTransformerInterface
{

    /**
     * Transforms an user into an elastica object having the required keys
     *
     * @param user $user the object to convert
     * @param array  $fields the keys we want to have in the returned array
     *
     * @return Document
     **/
    public function transform($user, array $fields)
    {

        // pag nag iinsert naian ine hiya
        
        dump(' transform ka');
        dump($user); 
        //exit;

        $identifier = $user->getId();

        $authors = array();

        // flatten the nested "authors"
        // This is an example for this post. Actually, we could (and should)
        // create a "flattenAuthor" property in the Elastisearch configuration
        // and create the method getFlattenAuthor in the user.php class with
        // the following implementation
        /*foreach($user->getAuthors() as $author){
            $nestedAuthor = array(
                'firstname' => $author->getFirstname(),
                'surname' => $author->getSurname(),
                'id' => $author->getId(),
            );
            $authors[] = $nestedAuthor;
        }

        $publishedAt = $user->getPublishedAt();
        $publishedAt = $publishedAt ? $publishedAt->format('c'):null;*/

        $carbon = new Carbon();

        $carbon = Carbon::instance($user->getDateAdded());

        $values = array(
            'userId'         => $user->getUserId(),
            'contactNumber'  => $user->getContactNumber(),
            'firstName'      => $user->getFirstname(),
            'lastName'       => $user->getLastName(),
            'email'          => $user->getEmail(),
            'isActive'       => $user->getIsActive(),
            'dateAdded'      => $carbon->toIso8601String(),
            'products'       => $user->getFlattendProducts(),
            //''
        );

        //Create a document to index
        $document = new Document($identifier,$values);
        
        //$document->setParent($user->getCategory()->getId());

        return $document;
    }
}
