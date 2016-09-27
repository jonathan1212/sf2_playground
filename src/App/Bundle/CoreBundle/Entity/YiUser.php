<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * YiUser
 */
class YiUser
{
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
    private $contactNumber;

    /**
     * @var integer
     */
    private $primaryImageId;

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
     * @var integer
     */
    private $primaryCoverPhotoId;

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
    private $countryId;

    /**
     * @var integer
     */
    private $languageId;

    /**
     * @var integer
     */
    private $consecutiveLoginCount = '0';

    /**
     * @var integer
     */
    private $resourceId = '0';

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $yiUserWarehouses;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->yiUserWarehouses = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set password
     *
     * @param string $password
     *
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * Set primaryImageId
     *
     * @param integer $primaryImageId
     *
     * @return YiUser
     */
    public function setPrimaryImageId($primaryImageId)
    {
        $this->primaryImageId = $primaryImageId;

        return $this;
    }

    /**
     * Get primaryImageId
     *
     * @return integer
     */
    public function getPrimaryImageId()
    {
        return $this->primaryImageId;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * Set primaryCoverPhotoId
     *
     * @param integer $primaryCoverPhotoId
     *
     * @return YiUser
     */
    public function setPrimaryCoverPhotoId($primaryCoverPhotoId)
    {
        $this->primaryCoverPhotoId = $primaryCoverPhotoId;

        return $this;
    }

    /**
     * Get primaryCoverPhotoId
     *
     * @return integer
     */
    public function getPrimaryCoverPhotoId()
    {
        return $this->primaryCoverPhotoId;
    }

    /**
     * Set reactivationcode
     *
     * @param string $reactivationcode
     *
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * @return YiUser
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
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return YiUser
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return YiUser
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId
     *
     * @return integer
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Set consecutiveLoginCount
     *
     * @param integer $consecutiveLoginCount
     *
     * @return YiUser
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
     * Set resourceId
     *
     * @param integer $resourceId
     *
     * @return YiUser
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * Get resourceId
     *
     * @return integer
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * Add yiUserWarehouse
     *
     * @param \App\Bundle\CoreBundle\Entity\YiUserwarehouse $yiUserWarehouse
     *
     * @return YiUser
     */
    public function addYiUserWarehouse(\App\Bundle\CoreBundle\Entity\YiUserwarehouse $yiUserWarehouse)
    {
        $this->yiUserWarehouses[] = $yiUserWarehouse;

        return $this;
    }

    /**
     * Remove yiUserWarehouse
     *
     * @param \App\Bundle\CoreBundle\Entity\YiUserwarehouse $yiUserWarehouse
     */
    public function removeYiUserWarehouse(\App\Bundle\CoreBundle\Entity\YiUserwarehouse $yiUserWarehouse)
    {
        $this->yiUserWarehouses->removeElement($yiUserWarehouse);
    }

    /**
     * Get yiUserWarehouses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getYiUserWarehouses()
    {
        return $this->yiUserWarehouses;
    }
}

