<?php

namespace App\Bundle\CoreBundle\Repository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{

    const CACHE_PRODUCT_ID = 'productId_'; // use entity identifier/primarykey for consistency
    /**
     *  Cache
     */
    public function findOne($id)
    {
        /*$x = $this->_em->getConfiguration()->getResultCacheImpl();
        $abc = $x->fetch('product1');*/

        $user = $this->createQueryBuilder('u')
                    ->where('u.productId = :id')
                    ->setParameter('id', $id)
                    ->getQuery()
                    //->setCacheable(true)
                    ->useQueryCache(true)
                    ->useResultCache(true, 3600, self::CACHE_PRODUCT_ID.$id)
                    ->getResult();
        
        return $user;
    }    


    // with connection to different database 
    public function retrievedWithBrand()
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.user', 'b')
            ->getQuery()
            ->getResult();
        
    }

}
