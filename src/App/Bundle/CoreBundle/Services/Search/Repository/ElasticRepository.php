<?php

namespace App\Bundle\CoreBundle\Services\Search\Repository;

use App\Bundle\CoreBundle\Model\UserSearch;
use FOS\ElasticaBundle\Repository;

use Elastica\Search;
use Elastica\Query;
use FOS\ElasticaBundle\Elastica\Client;

/**
 * @author Richard Miller <info@limethinking.co.uk>
 *
 * Basic repository to be extended to hold custom queries to be run
 * in the finder.
 */
class ElasticRepository extends Repository
{

    public function findElastic($query, $limit = null, $options = array())
    {
        $queryObject = Query::create($query);
        if (null !== $limit) {
            $queryObject->setSize($limit);
        }
        
        $searchable = new Search(new Client);
        $results = $searchable->search($queryObject, $options)->getResults();

        return $results;

    }
}