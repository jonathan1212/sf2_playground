<?php

namespace App\Bundle\CoreBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Bundle\CoreBundle\Entity\User;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\Event\PostFlushEventArgs;
use Doctrine\Common\Cache\RedisCache;

class ProductListener
{
    private $container;
    private $objectPersister;

    public function setContainer($container)
    {
        $this->container = $container;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        //$this->defaultLocale($args);
        dump('product pre persist');   
        //exit;
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        dump('product post persist');
        //$this->reindexStore($args);
    }

    public function postRemove(LifecycleEventArgs $args)
    {
        dump('product post remove');
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        dump('product post update');
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        dump('product pre update');
    }
}