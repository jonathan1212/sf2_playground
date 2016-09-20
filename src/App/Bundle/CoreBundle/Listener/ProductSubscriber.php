<?php

namespace App\Bundle\CoreBundle\Listener;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ORM\Event\LifecycleEventArgs;

class ProductSubscriber
{
    public function __construct(DocumentManager $dm)
    {
        $this->dm = $dm;
    }

    public function postLoad(LifecycleEventArgs $eventArgs)
    {
        $order = $eventArgs->getEntity();
        $em = $eventArgs->getEntityManager();
        
        $productReflProp = $em->getClassMetadata('App\Bundle\CoreBundle\Entity\OrderProduct')
            ->reflClass->getProperty('product');

        $productReflProp->setAccessible(true);
        $productReflProp->setValue(
            $order, $this->dm->getReference('App\Bundle\CoreBundle\Document\Product', $order->getProductId())
        );
    }
}