<?php

namespace App\Bundle\CoreBundle\Entity;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Serializable;
/**
 * User
 */
class User implements AdvancedUserInterface, Serializable
{
    /**
     * User type for buyer
     */
    const USER_TYPE_BUYER = 0;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $contactNumber;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var \DateTime
     */
    private $dateLastModified;

    /**
     * @var boolean
     */
    private $isActive = '1';

    /**
     * @var boolean
     */
    private $isMobileVerified = '0';

    /**
     * @var boolean
     */
    private $isEmailVerified = '0';

    /**
     * @var integer
     */
    private $loginCount = '0';

    /**
     * @var string
     */
    private $gender = 'M';

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var \DateTime
     */
    private $lastLoginDate;

    /**
     * @var \DateTime
     */
    private $lastLogoutDate;

    /**
     * @var string
     */
    private $lastLoginIp;

    /**
     * @var \DateTime
     */
    private $lastFailedLoginDate;

    /**
     * @var integer
     */
    private $failedLoginCount;

    /**
     * @var string
     */
    private $nickname;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var boolean
     */
    private $isBanned = '0';

    /**
     * @var \DateTime
     */
    private $lockDuration;

    /**
     * @var integer
     */
    private $banTypeId;

    /**
     * @var integer
     */
    private $userType = '0';

    /**
     * @var string
     */
    private $forgotPasswordToken;

    /**
     * @var \DateTime
     */
    private $forgotPasswordTokenExpiration;

    /**
     * @var string
     */
    private $forgotPasswordCode;

    /**
     * @var \DateTime
     */
    private $forgotPasswordCodeExpiration;

    /**
     * @var string
     */
    private $referralCode;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var boolean
     */
    private $slugChanged = '0';

    /**
     * @var string
     */
    private $reactivationcode;

    /**
     * @var integer
     */
    private $accountId;

    /**
     * @var string
     */
    private $tin = '0';

    /**
     * @var boolean
     */
    private $isSocialMedia = '0';

    /**
     * @var integer
     */
    private $registrationType = '0';

    /**
     * @var integer
     */
    private $consecutiveLoginCount = '0';

    /**
     * @var \App\Bundle\CoreBundle\Entity\Userimage
     */
    private $primaryCoverPhoto;

    /**
     * @var \App\Bundle\CoreBundle\Entity\Userimage
     */
    private $primaryImage;

    /**
     * @var \App\Bundle\CoreBundle\Entity\Country
     */
    private $country;


    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }


    /**
     * Get userId
     *
     * @return integer
     */
    public function getId()
    {
        return $this->userId;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contactNumber
     *
     * @param string $contactNumber
     *
     * @return User
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;

        return $this;
    }

    /**
     * Get contactNumber
     *
     * @return string
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return User
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateLastModified
     *
     * @param \DateTime $dateLastModified
     *
     * @return User
     */
    public function setDateLastModified($dateLastModified)
    {
        $this->dateLastModified = $dateLastModified;

        return $this;
    }

    /**
     * Get dateLastModified
     *
     * @return \DateTime
     */
    public function getDateLastModified()
    {
        return $this->dateLastModified;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isMobileVerified
     *
     * @param boolean $isMobileVerified
     *
     * @return User
     */
    public function setIsMobileVerified($isMobileVerified)
    {
        $this->isMobileVerified = $isMobileVerified;

        return $this;
    }

    /**
     * Get isMobileVerified
     *
     * @return boolean
     */
    public function getIsMobileVerified()
    {
        return $this->isMobileVerified;
    }

    /**
     * Set isEmailVerified
     *
     * @param boolean $isEmailVerified
     *
     * @return User
     */
    public function setIsEmailVerified($isEmailVerified)
    {
        $this->isEmailVerified = $isEmailVerified;

        return $this;
    }

    /**
     * Get isEmailVerified
     *
     * @return boolean
     */
    public function getIsEmailVerified()
    {
        return $this->isEmailVerified;
    }

    /**
     * Set loginCount
     *
     * @param integer $loginCount
     *
     * @return User
     */
    public function setLoginCount($loginCount)
    {
        $this->loginCount = $loginCount;

        return $this;
    }

    /**
     * Get loginCount
     *
     * @return integer
     */
    public function getLoginCount()
    {
        return $this->loginCount;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return User
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set lastLoginDate
     *
     * @param \DateTime $lastLoginDate
     *
     * @return User
     */
    public function setLastLoginDate($lastLoginDate)
    {
        $this->lastLoginDate = $lastLoginDate;

        return $this;
    }

    /**
     * Get lastLoginDate
     *
     * @return \DateTime
     */
    public function getLastLoginDate()
    {
        return $this->lastLoginDate;
    }

    /**
     * Set lastLogoutDate
     *
     * @param \DateTime $lastLogoutDate
     *
     * @return User
     */
    public function setLastLogoutDate($lastLogoutDate)
    {
        $this->lastLogoutDate = $lastLogoutDate;

        return $this;
    }

    /**
     * Get lastLogoutDate
     *
     * @return \DateTime
     */
    public function getLastLogoutDate()
    {
        return $this->lastLogoutDate;
    }

    /**
     * Set lastLoginIp
     *
     * @param string $lastLoginIp
     *
     * @return User
     */
    public function setLastLoginIp($lastLoginIp)
    {
        $this->lastLoginIp = $lastLoginIp;

        return $this;
    }

    /**
     * Get lastLoginIp
     *
     * @return string
     */
    public function getLastLoginIp()
    {
        return $this->lastLoginIp;
    }

    /**
     * Set lastFailedLoginDate
     *
     * @param \DateTime $lastFailedLoginDate
     *
     * @return User
     */
    public function setLastFailedLoginDate($lastFailedLoginDate)
    {
        $this->lastFailedLoginDate = $lastFailedLoginDate;

        return $this;
    }

    /**
     * Get lastFailedLoginDate
     *
     * @return \DateTime
     */
    public function getLastFailedLoginDate()
    {
        return $this->lastFailedLoginDate;
    }

    /**
     * Set failedLoginCount
     *
     * @param integer $failedLoginCount
     *
     * @return User
     */
    public function setFailedLoginCount($failedLoginCount)
    {
        $this->failedLoginCount = $failedLoginCount;

        return $this;
    }

    /**
     * Get failedLoginCount
     *
     * @return integer
     */
    public function getFailedLoginCount()
    {
        return $this->failedLoginCount;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return User
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return User
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set isBanned
     *
     * @param boolean $isBanned
     *
     * @return User
     */
    public function setIsBanned($isBanned)
    {
        $this->isBanned = $isBanned;

        return $this;
    }

    /**
     * Get isBanned
     *
     * @return boolean
     */
    public function getIsBanned()
    {
        return $this->isBanned;
    }

    /**
     * Set lockDuration
     *
     * @param \DateTime $lockDuration
     *
     * @return User
     */
    public function setLockDuration($lockDuration)
    {
        $this->lockDuration = $lockDuration;

        return $this;
    }

    /**
     * Get lockDuration
     *
     * @return \DateTime
     */
    public function getLockDuration()
    {
        return $this->lockDuration;
    }

    /**
     * Set banTypeId
     *
     * @param integer $banTypeId
     *
     * @return User
     */
    public function setBanTypeId($banTypeId)
    {
        $this->banTypeId = $banTypeId;

        return $this;
    }

    /**
     * Get banTypeId
     *
     * @return integer
     */
    public function getBanTypeId()
    {
        return $this->banTypeId;
    }

    /**
     * Set userType
     *
     * @param integer $userType
     *
     * @return User
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return integer
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set forgotPasswordToken
     *
     * @param string $forgotPasswordToken
     *
     * @return User
     */
    public function setForgotPasswordToken($forgotPasswordToken)
    {
        $this->forgotPasswordToken = $forgotPasswordToken;

        return $this;
    }

    /**
     * Get forgotPasswordToken
     *
     * @return string
     */
    public function getForgotPasswordToken()
    {
        return $this->forgotPasswordToken;
    }

    /**
     * Set forgotPasswordTokenExpiration
     *
     * @param \DateTime $forgotPasswordTokenExpiration
     *
     * @return User
     */
    public function setForgotPasswordTokenExpiration($forgotPasswordTokenExpiration)
    {
        $this->forgotPasswordTokenExpiration = $forgotPasswordTokenExpiration;

        return $this;
    }

    /**
     * Get forgotPasswordTokenExpiration
     *
     * @return \DateTime
     */
    public function getForgotPasswordTokenExpiration()
    {
        return $this->forgotPasswordTokenExpiration;
    }

    /**
     * Set forgotPasswordCode
     *
     * @param string $forgotPasswordCode
     *
     * @return User
     */
    public function setForgotPasswordCode($forgotPasswordCode)
    {
        $this->forgotPasswordCode = $forgotPasswordCode;

        return $this;
    }

    /**
     * Get forgotPasswordCode
     *
     * @return string
     */
    public function getForgotPasswordCode()
    {
        return $this->forgotPasswordCode;
    }

    /**
     * Set forgotPasswordCodeExpiration
     *
     * @param \DateTime $forgotPasswordCodeExpiration
     *
     * @return User
     */
    public function setForgotPasswordCodeExpiration($forgotPasswordCodeExpiration)
    {
        $this->forgotPasswordCodeExpiration = $forgotPasswordCodeExpiration;

        return $this;
    }

    /**
     * Get forgotPasswordCodeExpiration
     *
     * @return \DateTime
     */
    public function getForgotPasswordCodeExpiration()
    {
        return $this->forgotPasswordCodeExpiration;
    }

    /**
     * Set referralCode
     *
     * @param string $referralCode
     *
     * @return User
     */
    public function setReferralCode($referralCode)
    {
        $this->referralCode = $referralCode;

        return $this;
    }

    /**
     * Get referralCode
     *
     * @return string
     */
    public function getReferralCode()
    {
        return $this->referralCode;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set slugChanged
     *
     * @param boolean $slugChanged
     *
     * @return User
     */
    public function setSlugChanged($slugChanged)
    {
        $this->slugChanged = $slugChanged;

        return $this;
    }

    /**
     * Get slugChanged
     *
     * @return boolean
     */
    public function getSlugChanged()
    {
        return $this->slugChanged;
    }

    /**
     * Set reactivationcode
     *
     * @param string $reactivationcode
     *
     * @return User
     */
    public function setReactivationcode($reactivationcode)
    {
        $this->reactivationcode = $reactivationcode;

        return $this;
    }

    /**
     * Get reactivationcode
     *
     * @return string
     */
    public function getReactivationcode()
    {
        return $this->reactivationcode;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return User
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return integer
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set tin
     *
     * @param string $tin
     *
     * @return User
     */
    public function setTin($tin)
    {
        $this->tin = $tin;

        return $this;
    }

    /**
     * Get tin
     *
     * @return string
     */
    public function getTin()
    {
        return $this->tin;
    }

    /**
     * Set isSocialMedia
     *
     * @param boolean $isSocialMedia
     *
     * @return User
     */
    public function setIsSocialMedia($isSocialMedia)
    {
        $this->isSocialMedia = $isSocialMedia;

        return $this;
    }

    /**
     * Get isSocialMedia
     *
     * @return boolean
     */
    public function getIsSocialMedia()
    {
        return $this->isSocialMedia;
    }

    /**
     * Set registrationType
     *
     * @param integer $registrationType
     *
     * @return User
     */
    public function setRegistrationType($registrationType)
    {
        $this->registrationType = $registrationType;

        return $this;
    }

    /**
     * Get registrationType
     *
     * @return integer
     */
    public function getRegistrationType()
    {
        return $this->registrationType;
    }

    /**
     * Set consecutiveLoginCount
     *
     * @param integer $consecutiveLoginCount
     *
     * @return User
     */
    public function setConsecutiveLoginCount($consecutiveLoginCount)
    {
        $this->consecutiveLoginCount = $consecutiveLoginCount;

        return $this;
    }

    /**
     * Get consecutiveLoginCount
     *
     * @return integer
     */
    public function getConsecutiveLoginCount()
    {
        return $this->consecutiveLoginCount;
    }

    /**
     * Set primaryCoverPhoto
     *
     * @param \App\Bundle\CoreBundle\Entity\Userimage $primaryCoverPhoto
     *
     * @return User
     */
    public function setPrimaryCoverPhoto(\App\Bundle\CoreBundle\Entity\Userimage $primaryCoverPhoto = null)
    {
        $this->primaryCoverPhoto = $primaryCoverPhoto;

        return $this;
    }

    /**
     * Get primaryCoverPhoto
     *
     * @return \App\Bundle\CoreBundle\Entity\Userimage
     */
    public function getPrimaryCoverPhoto()
    {
        return $this->primaryCoverPhoto;
    }

    /**
     * Set primaryImage
     *
     * @param \App\Bundle\CoreBundle\Entity\Userimage $primaryImage
     *
     * @return User
     */
    public function setPrimaryImage(\App\Bundle\CoreBundle\Entity\Userimage $primaryImage = null)
    {
        $this->primaryImage = $primaryImage;

        return $this;
    }

    /**
     * Get primaryImage
     *
     * @return \App\Bundle\CoreBundle\Entity\Userimage
     */
    public function getPrimaryImage()
    {
        return $this->primaryImage;
    }

    /**
     * Set country
     *
     * @param \App\Bundle\CoreBundle\Entity\Country $country
     *
     * @return User
     */
    public function setCountry(\App\Bundle\CoreBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \App\Bundle\CoreBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    public function getListUsers()
    {

        return array('jon','karl','kevs','domink');
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add product
     *
     * @param \App\Bundle\CoreBundle\Entity\Product $product
     *
     * @return User
     */
    public function addProduct(\App\Bundle\CoreBundle\Entity\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \App\Bundle\CoreBundle\Entity\Product $product
     */
    public function removeProduct(\App\Bundle\CoreBundle\Entity\Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }

    public function getFlattendProducts()
    {
        $data = array();
        foreach ($this->getProducts() as $product) {
            $data[] = array(
                        'productId'     => $product->getProductId() ,
                        //'dateCreated'   => $product->getDateCreated(),
                        'name'          => $product->getName(),
                        'description'   => $product->getDescription(),
                    );
        }

        return $data;
    }

    public function getProductIds()
    {
        $ids = array();

        foreach($this->getProducts() as $product) {
            array_push($ids, $product->getProductId());
        }

        return implode(',', $ids);
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function serialize()
    {
        return serialize(array(
            $this->userId,
            $this->email,
            $this->password,
            $this->isActive
        ));
    }

    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
        list (
            $this->userId,
            $this->email,
            $this->password,
            $this->isActive
            ) = unserialize($serialized);
    }

    /**
     * Checks whether the user is locked.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a LockedException and prevent login.
     *
     * @return bool true if the user is not locked, false otherwise
     *
     * @see LockedException
     */
    public function isAccountNonLocked()
    {
        // if null then the username is not locked
        if(!is_null($this->lockDuration)){
            $timeNow = Carbon::now()->getTimestamp();
            $lockTime = $this->lockDuration->getTimestamp();

            // if lock time is greater than the time now then the account is still locked
            if($lockTime > $timeNow){
                return false;
            }
            else{
                return true;
            }
        }

        return true;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }


     /**
     * Checks whether the user's credentials (password) has expired.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a CredentialsExpiredException and prevent login.
     *
     * @return bool true if the user's credentials are non expired, false otherwise
     *
     * @see CredentialsExpiredException
     */
    public function isCredentialsNonExpired()
    {
        // TODO: Implement isCredentialsNonExpired() method.
        return true;
    }

    /**
     * Checks whether the user is enabled.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a DisabledException and prevent login.
     *
     * @return bool true if the user is enabled, false otherwise
     *
     * @see DisabledException
     */
    public function isEnabled()
    {
        return $this->getIsActive();
    }

    public function isAccountNonExpired()
    {
        // TODO: Implement isAccountNonExpired() method.
        return true;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        return $this->email;
    }
}
