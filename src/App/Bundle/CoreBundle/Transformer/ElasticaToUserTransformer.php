<?php

namespace App\Bundle\CoreBundle\Transformer;

use FOS\ElasticaBundle\Doctrine\AbstractElasticaToModelTransformer;
use Doctrine\ORM\Query;

class ElasticaToUserTransformer extends AbstractElasticaToModelTransformer
{
    /**
     * Fetch objects for theses identifier values
     *
     * @param array $identifierValues ids values
     * @param Boolean $hydrate whether or not to hydrate the objects, false returns arrays
     * @return array of objects or arrays
     */
    protected function findByIdentifiers(array $identifierValues, $hydrate)
    {
        /*dump('jonathan');
        dump($identifierValues);
        dump($hydrate);
        dump($this->options['identifier']);
        exit;*/

        if (empty($identifierValues)) {
            return array();
        }

        $hydrationMode = $hydrate ? Query::HYDRATE_OBJECT : Query::HYDRATE_ARRAY;
        $qb = $this->registry
            ->getManagerForClass('AppCoreBundle:User')
            ->getRepository('AppCoreBundle:User')
            ->createQueryBuilder('u')
            ->select('u,c')
            ->join('u.country','c');
        /* @var $qb \Doctrine\ORM\QueryBuilder */
        $qb->where($qb->expr()->in('u.'.$this->options['identifier'], ':values'))
            ->setParameter('values', $identifierValues);

        return $qb->getQuery()->setHydrationMode($hydrationMode)->execute();
    }

    public function transform(array $elasticaObjects)
    {
        dump('hi d');
        $ids = $highlights = array();
        foreach ($elasticaObjects as $elasticaObject) {
            $ids[] = $elasticaObject->getId();
            $highlights[$elasticaObject->getId()] = $elasticaObject->getHighlights();
        }

        $objects = $this->findByIdentifiers($ids, $this->options['hydrate']);
        if (!$this->options['ignore_missing'] && count($objects) < count($elasticaObjects)) {
            throw new \RuntimeException('Cannot find corresponding Doctrine objects for all Elastica results.');
        };

        foreach ($objects as $key => $object) {
            $object->elastica = $elasticaObjects[$key];

            if ($object instanceof HighlightableModelInterface) {
                $object->setElasticHighlights($highlights[$object->getId()]);
            }
        }

        // sort objects in the order of ids
        $idPos = array_flip($ids);
        $identifier = $this->options['identifier'];
        usort($objects, $this->getSortingClosure($idPos, $identifier));

        return $objects;
    }


    /*public function hybridTransform(array $elasticaObjects)
    {
        dump('hybrid');
        dump($elasticaObjects);
        exit;
    }*/
}