<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * YiLocation
 */
class YiLocation
{
    /**
     * @var integer
     */
    private $locationId;

    /**
     * @var integer
     */
    private $locationTypeId;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $code = '';

    /**
     * @var boolean
     */
    private $isActive = '1';

    /**
     * @var integer
     */
    private $lookupId;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var \DateTime
     */
    private $dateLastModified;

    /**
     * @var \App\Bundle\CoreBundle\Entity\YiLocation
     */
    private $parent;


    /**
     * Get locationId
     *
     * @return integer
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set locationTypeId
     *
     * @param integer $locationTypeId
     *
     * @return YiLocation
     */
    public function setLocationTypeId($locationTypeId)
    {
        $this->locationTypeId = $locationTypeId;

        return $this;
    }

    /**
     * Get locationTypeId
     *
     * @return integer
     */
    public function getLocationTypeId()
    {
        return $this->locationTypeId;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return YiLocation
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return YiLocation
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return YiLocation
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
     * Set lookupId
     *
     * @param integer $lookupId
     *
     * @return YiLocation
     */
    public function setLookupId($lookupId)
    {
        $this->lookupId = $lookupId;

        return $this;
    }

    /**
     * Get lookupId
     *
     * @return integer
     */
    public function getLookupId()
    {
        return $this->lookupId;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return YiLocation
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
     * @return YiLocation
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
     * Set parent
     *
     * @param \App\Bundle\CoreBundle\Entity\YiLocation $parent
     *
     * @return YiLocation
     */
    public function setParent(\App\Bundle\CoreBundle\Entity\YiLocation $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \App\Bundle\CoreBundle\Entity\YiLocation
     */
    public function getParent()
    {
        return $this->parent;
    }
}
