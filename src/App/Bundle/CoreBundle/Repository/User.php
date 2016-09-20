<?php

namespace App\Bundle\CoreBundle\Repository;

/**
 * User
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class User extends \Doctrine\ORM\EntityRepository implements UserProviderInterface
{
    public function loadUserByUsername($email)
    {
 
        $user = $this->createQueryBuilder('u')
                     ->where('u.email = :email')
                     ->setParameter('email', $email)
                     ->getQuery()
                     ->setMaxResults(1)
                     ->getOneOrNullResult();

        
        return $user;
    }

    /**
     * @param UserInterface $user
     * @return mixed
     */
    public function refreshUser(UserInterface $user)
    {
        return $user;
    }

    /**
     * @param string $class
     * @return bool
     */
    public function supportsClass($class)
    {
        return $this->getEntityName() === $class || is_subclass_of($class, $this->getEntityName());
    }

    /*public function find($id)
    {
        dump($id);
        dump('hala hala hala');
        exit;
    }

    public function findOne*/
}
