<?php

namespace App\Bundle\CoreBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Bundle\CoreBundle\Entity\User;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\Event\PostFlushEventArgs;


class UserListener implements EventSubscriber
{
    private $container;
    private $objectPersister;

    public function getSubscribedEvents()
    {
        return [
            'onFlush',
            'postFlush'
        ];
    }
    public function setContainer($container)
    {
        $this->container = $container;
    }

    public function setObjectPersister($objectPersister)
    {
        $this->objectPersister = $objectPersister;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $this->defaultLocale($args);
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        dump('post persist');
        $this->reindexStore($args);
    }

    public function postRemove(LifecycleEventArgs $args)
    {
        $this->reindexStore($args);
    }

    public function postUpdate(LifecycleEventArgs $args)
    {
        dump('post update');
        $this->reindexStore($args);
    }

    public function applyDiscountHandler(User $user)
    {
        dump('post load 1');
        dump($user->getFirstName());
    }

    public function checkInWishlist(User $user)
    {
        dump('post load 2');
        dump('set lastName - antivo');
        $user->setLastName('antivo');
    }

    public function onFlush(OnFlushEventArgs $event)
    {
        $this->bills = [];
        /* @var $em \Doctrine\ORM\EntityManager */
        $em = $event->getEntityManager();
        /* @var $uow \Doctrine\ORM\UnitOfWork */
        $uow = $em->getUnitOfWork();

        foreach ($uow->getScheduledEntityInsertions() as $entity) {

            dump('onflush');
            //dump($entity);
            /*if ($entity instanceof Bill) {

                $this->bills[] = $entity;
            }*/
        }
        dump('on flush ss');
        
    }

    public function postFlush(PostFlushEventArgs $event)
    {
        dump('post flush');

        $em = $event->getEntityManager();
        /* @var $uow \Doctrine\ORM\UnitOfWork */
        $uow = $em->getUnitOfWork();

        
        //dump($uow->getScheduledEntityInsertions());

        /*if (!empty($this->bills)) {

            // @var $em \Doctrine\ORM\EntityManager 
            $em = $event->getEntityManager();

            foreach ($this->bills as $bill) {

                // @var $bill \MyCompany\CompanyBundle\Entity\Bill 
                $this->pdfs->generateFor($bill);
                $em->persist($bill);
            }

            $em->flush();
        }*/
    }

    private function reindexStore(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $entityManager = $args->getEntityManager();

        if ($entity instanceof User) {
            //$store = $entity->getUser()->getStore();
            $this->objectPersister->insertOne($entity);
        }
    }

    private function defaultLocale(LifecycleEventArgs $args)
    {

        /*$entity = $args->getEntity();
        if ($entity instanceof Product) {

            if (!$entity->getDefaultLocale()) {
                $locale = $entity->getLocale();
                if (!$locale) {
                    $trans = $this->container->get('yilinker_core.translatable.listener');
                    $locale = $trans->getListenerLocale();
                }
                
                $entity->setDefaultLocale($locale);
            }
        }*/
    }
}