<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * LabLogItemEvent
 */
class LabLogItemEvent extends LabLogItem
{
    /**
     * @var string
     */
    private $location;

    /**
     * @var \DateTime
     */
    private $requiresRegistration;


    /**
     * Set location
     *
     * @param string $location
     *
     * @return LabLogItemEvent
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
     * Set requiresRegistration
     *
     * @param \DateTime $requiresRegistration
     *
     * @return LabLogItemEvent
     */
    public function setRequiresRegistration($requiresRegistration)
    {
        $this->requiresRegistration = $requiresRegistration;

        return $this;
    }

    /**
     * Get requiresRegistration
     *
     * @return \DateTime
     */
    public function getRequiresRegistration()
    {
        return $this->requiresRegistration;
    }
}
