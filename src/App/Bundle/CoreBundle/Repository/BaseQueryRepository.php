<?php

namespace App\Bundle\CoreBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\Tools\Pagination\Paginator;


class BaseQueryRepository extends EntityRepository
{
    private $qb = null;
    protected $limit = 15;
    protected $hydrationMode = 1;

    public function qb()
    {
        $this->qb = $this->createQueryBuilder('this');
        return $this;
    }

    public function setLimit($limit = 15)
    {
        $this->qb->setMaxResults($limit);

        return $this;
    }

    public function page($page)
    {
        $page = $page > 0 ? $page - 1 : 0;
        $limit = $this->qb->getMaxResults();
        if (!$limit) {
            $this->qb->setMaxResults($this->limit);
            $limit = $this->limit;
        }

        $this->qb->setFirstResult($page * $limit);
        return $this;
    }

    public function unBindOffset()
    {
        $this->qb->setFirstResult(0);

        return $this;
    }

    public function paginate($page ,$fetchJoinCollection = true)
    {
        $this->page($page);

        return new Paginator($this->qb->getQuery()->setHydrationMode($this->hydrationMode), $fetchJoinCollection);
    }

    public function getQB()
    {
        return $this->qb;
    }

    public function setHydrationMode($hydration)
    {
        $this->hydrationMode = $hydration;

        return $this;
    }

    public function getResult($hydrationMode = null)
    {
        if (is_null($hydrationMode)) {
            $hydrationMode = $this->hydrationMode;
        }
        $result = $this->getQB()->getQuery()->getResult($hydrationMode);

        return $result;
    }

    public function getSingleResult($hydrationMode = null)
    {
        $result = $this->getResult($hydrationMode);

        return array_shift($result);
    }

    public function getOneOrNullResult()
    {
        return $this->getQB()
                    ->getQuery()
                    ->setMaxResults(1)
                    ->getOneOrNullResult();
    }

    public function getCount()
    {
        $count = $this->select('count(distinct this)')
                      ->getQB()
                      ->setMaxResults(null)
                      ->setFirstResult(null)
                      ->getQuery()
                      ->getSingleScalarResult();
        $this->select('this');

        return $count;
    }

    public function getSum($columns)
    {
        $sum = $this->select("SUM($columns) as resultSum")
                    ->getQB()
                    ->getQuery()
                    ->getOneOrNullResult();
        $this->select('this');

        if (isset($sum['resultSum'])) {
            return (float) $sum['resultSum'];
        }

        return 0;
    }

    public function innerJoinWOCollision($join, $alias)
    {
        if (!$this->aliasExist($alias)) {
            $this->innerJoin($join, $alias);
        }

        return $this;
    }

    protected function aliasExist($alias)
    {
        $joinDqlParts = $this->getQB()->getDQLParts()['join'];
        $aliasAlreadyExists = false;

        foreach ($joinDqlParts as $joins) {
            foreach ($joins as $join) {
                if ($join->getAlias() === $alias) {
                    $aliasAlreadyExists = true;
                    break 2;
                }
            }
        }

        return $aliasAlreadyExists;
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this->qb, $name)) {
            call_user_func_array(array($this->qb, $name), $arguments);
        }
        else {
            return parent::__call($name, $arguments);
        }

        return $this;
    }
}