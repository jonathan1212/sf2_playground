<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * InventoryRoom
 */
class InventoryRoom extends Inventory
{
    /**
     * @var string
     */
    private $roomType;

    /**
     * @var string
     */
    private $rackLimit = '';


    /**
     * Set roomType
     *
     * @param string $roomType
     *
     * @return InventoryRoom
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }

    /**
     * Get roomType
     *
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Set rackLimit
     *
     * @param string $rackLimit
     *
     * @return InventoryRoom
     */
    public function setRackLimit($rackLimit)
    {
        $this->rackLimit = $rackLimit;

        return $this;
    }

    /**
     * Get rackLimit
     *
     * @return string
     */
    public function getRackLimit()
    {
        return $this->rackLimit;
    }
}

