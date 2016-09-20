<?php

namespace App\Bundle\CoreBundle\Security;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use App\Bundle\CoreBundle\Entity;
use Doctrine\Common\Persistence\ObjectRepository;

class WebserviceUserProvider implements UserProviderInterface
{
    /**
     * User Repository
     *  
     * @var Doctrine\Common\Persistence\ObjectRepository
     */
    protected $userRepository;

    /**
     * User Type
     *
     * @var int
     */
    private $userType;

    public function __construct(ObjectRepository $userRepository, $userType = User::USER_TYPE_BUYER)
    {
        $this->userRepository = $userRepository;
        $this->userType = $userType;
    }

    public function loadUserByUsername($request)
    {
        // make a call to your webservice here
        $query = $this->userRepository
                  ->createQueryBuilder('u')
                  ->where('u.email = :request OR u.contactNumber = :request')
                  //->andWhere('u.userType = :userType')
                  ->andWhere('u.isActive = :active')
                  ->setParameter('request', $request)
                  ->setParameter('active', true)
                  //->setParameter('userType', $this->userType)
                  ->setMaxResults(1)
                  ->getQuery();

        // pretend it returns an array on success, false if there is no user

        if($request){
            $user = $query->getOneOrNullResult();
            return $user;
        }
        else{
            throw new NoResultException("User not found", 1);
            
        }

        throw new UsernameNotFoundException(
            sprintf('Username "%s" does not exist.', $request)
        );
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(
                sprintf(
                    'Instances of "%s" are not supported.',
                    $class
                )
            );
        }
        return $this->userRepository->find($user->getId());
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass($class)
    {
        return $this->userRepository->getClassName() === $class
        || is_subclass_of($class, $this->userRepository->getClassName());
    }
}