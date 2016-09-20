<?php

namespace App\Bundle\CoreBundle\Services\Search\Repository;

use App\Bundle\CoreBundle\Model\UserSearch;
//use FOS\ElasticaBundle\Repository;
use App\Bundle\CoreBundle\Services\Search\Repository\ElasticRepository;

class UserSearchRepository extends ElasticRepository
{

    public function search(UserSearch $userSearch, $getResults = true)
    {
        // we create a query to return all the articles
        // but if the criteria title is specified, we use it
        if ($userSearch->getFirstName() != null && $userSearch != '') {
            $query = new \Elastica\Query\Match();
            $query->setFieldQuery('user.firstName', $userSearch->getFirstName());
            $query->setFieldFuzziness('user.firstName', 0.7);
            $query->setFieldMinimumShouldMatch('user.firstName', '80%');
            //
        } else {
            $query = new \Elastica\Query\MatchAll();
        }

        $baseQuery = $query;        

        // then we create filters depending on the chosen criterias
        $boolFilter = new \Elastica\Filter\Bool();

        /*
            Dates filter
            We add this filter only the getIspublished filter is not at "false"
        */
        if($userSearch->getIsActive()
           && null !== $userSearch->getDateFrom()
           && null !== $userSearch->getDateTo())
        {
            $boolFilter->addMust(new \Elastica\Filter\Range('dateAdded',
                array(
                    'gte' => $userSearch->getDateFrom()->toIso8601String(),
                    'lte' => $userSearch->getDateTo()->toIso8601String()
                )
            ));
        }

        // Published or not filter
        if($userSearch->getIsActive() !== null){
            $boolFilter->addMust(
                new \Elastica\Filter\Terms('isActive', array($userSearch->getIsActive()))
            );
        }

        $filtered = new \Elastica\Query\Filtered($baseQuery, $boolFilter);

        $query = \Elastica\Query::create($filtered);

        return $query;
        //return $this->find($query);
    }


    public function filterSearch(UserSearch $userSearch)
    {
        $query = $this->search($userSearch);
        
        //$result = $this->find($query); // return objects
        $result = $this->findElastic($query); // return elastica

        //return $query;
        return $result;

    }

}