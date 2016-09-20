<?php
 
/**
 * Better than using
 * $this->getDoctrine()->getManager()->getConfiguration()->getResultCacheImpl()->delete(...);
 * in your controllers
 */
 
namespace App\Bundle\CoreBundle\Listener;
 
use Doctrine\ORM\Event\OnFlushEventArgs;
 
use \Exception;
 
 /**
  *  This will trigger upon OnFlush 
  *   Remove specific cached Id from entity
  */
class CacheInvalidator
{
 
    public function onFlush(OnFlushEventArgs $eventArgs)
    {
        $em = $eventArgs->getEntityManager();
        $uow = $em->getUnitOfWork();
 
        $scheduledEntityChanges = array(
            //'insert' => $uow->getScheduledEntityInsertions(),
            'update' => $uow->getScheduledEntityUpdates(),
            'delete' => $uow->getScheduledEntityDeletions()
        );

        $cacheIds = array();
 
        foreach ($scheduledEntityChanges as $change => $entities) {
            foreach($entities as $entity) {
               
                dump($entity);

                $meta = $em->getClassMetadata(get_class($entity));
                $identifier = $meta->getSingleIdentifierFieldName();
                
                $id = call_user_func(array($entity,"get" .ucfirst($identifier)));
                
                $em->getConfiguration()->getResultCacheImpl()->delete($identifier."_".$id);

            }
        }
    }
}