<?php

namespace App\Bundle\CoreBundle\RepositoryMongo;

use Doctrine\ODM\MongoDB\DocumentRepository;

/**
 * RestaurantsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

//mongodb/query/builder
class RestaurantsRepository extends DocumentRepository
{

    public function getRestaurant()
    {

        return $this->createQueryBuilder()
            ->field('borough')->equals('Queens')
            ->getQuery()->getSingleResult();
    }

}