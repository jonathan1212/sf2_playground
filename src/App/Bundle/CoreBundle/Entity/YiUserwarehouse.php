<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * YiUserwarehouse
 */
class YiUserwarehouse
{
    /**
     * @var integer
     */
    private $userWarehouseId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var \DateTime
     */
    private $dateAdded = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     */
    private $dateLastModified = 'CURRENT_TIMESTAMP';

    /**
     * @var boolean
     */
    private $isDelete;

    /**
     * @var \App\Bundle\CoreBundle\Entity\YiUser
     */
    private $user;

    /**
     * @var \App\Bundle\CoreBundle\Entity\YiLocation
     */
    private $location;


    /**
     * Get userWarehouseId
     *
     * @return integer
     */
    public function getUserWarehouseId()
    {
        return $this->userWarehouseId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return YiUserwarehouse
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return YiUserwarehouse
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return YiUserwarehouse
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return YiUserwarehouse
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
     * @return YiUserwarehouse
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
     * Set isDelete
     *
     * @param boolean $isDelete
     *
     * @return YiUserwarehouse
     */
    public function setIsDelete($isDelete)
    {
        $this->isDelete = $isDelete;

        return $this;
    }

    /**
     * Get isDelete
     *
     * @return boolean
     */
    public function getIsDelete()
    {
        return $this->isDelete;
    }

    /**
     * Set user
     *
     * @param \App\Bundle\CoreBundle\Entity\YiUser $user
     *
     * @return YiUserwarehouse
     */
    public function setUser(\App\Bundle\CoreBundle\Entity\YiUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \App\Bundle\CoreBundle\Entity\YiUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set location
     *
     * @param \App\Bundle\CoreBundle\Entity\YiLocation $location
     *
     * @return YiUserwarehouse
     */
    public function setLocation(\App\Bundle\CoreBundle\Entity\YiLocation $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return \App\Bundle\CoreBundle\Entity\YiLocation
     */
    public function getLocation()
    {
        return $this->location;
    }
}
