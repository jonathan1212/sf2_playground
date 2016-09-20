<?php

namespace App\Bundle\CoreBundle\Oauth\GrantExtension;

use FOS\OAuthServerBundle\Storage\GrantExtensionInterface;
use OAuth2\Model\IOAuth2Client;
use OAuth2\OAuth2;
use OAuth2\OAuth2ServerException;
use App\Bundle\CoreBundle\Entity\User;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

/**
 * Seller Grant Extension
 */
class FrontendGrantExtension implements GrantExtensionInterface
{
    
    /**
     * Password Encoder
     *
     * @var Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    private $passwordEncoder;

    /**
     * User Repository
     *
     * @var Yilinker\Bundle\CoreBundle\Repository\UserRepository
     */
    private $userRepository;


    /**
     * Ignore password
     *
     * @var boolean
     */
    private $ignorePassword = false;

    /**
     * Constructor
     *
     * @param Yilinker\Bundle\CoreBundle\Repository\UserRepository $userRepository
     * @param Symfony\Component\Security\Core\Encoder\UserPasswordEncoder $passwordEncoder
     */
    public function __construct(
        EntityRepository $userRepository, 
        UserPasswordEncoder $passwordEncoder
    ){
        $this->userRepository = $userRepository;
        $this->passwordEncoder = $passwordEncoder;
    }

    /*
     * {@inheritdoc}
     */
    public function checkGrantExtension(IOAuth2Client $client, array $inputData, array $authHeaders)
    {   
        $areaCode = array_key_exists("areaCode", $inputData)? $inputData["areaCode"] : "63";

        // Check that the input data is correct
        if (!isset($inputData['username']) || !isset($inputData['password'])) {
            return false;
        }

        $user = $this->userRepository->loadUserByUsername($inputData['username']);
        
        if($this->ignorePassword === false){
            if($user === null || $this->passwordEncoder->isPasswordValid($user, $inputData['password']) === false){
                throw new OAuth2ServerException(OAuth2::HTTP_BAD_REQUEST, OAuth2::ERROR_INVALID_REQUEST, 'Invalid email/password credentials');
            }
        }

        if($user->getUserType() !== User::USER_TYPE_BUYER){
            throw new OAuth2ServerException(OAuth2::HTTP_BAD_REQUEST, OAuth2::ERROR_INVALID_REQUEST, 'User is not a buyer');
        }

        if($user->getIsActive() === false){
            throw new OAuth2ServerException(OAuth2::HTTP_BAD_REQUEST, OAuth2::ERROR_INVALID_REQUEST, 'This account has been disabled');
        }

        return array(
            'data' => $user
        );
    }

    public function setIgnorePassword($ignorePassword)
    {
        $this->ignorePassword = $ignorePassword;
    }
    
}
