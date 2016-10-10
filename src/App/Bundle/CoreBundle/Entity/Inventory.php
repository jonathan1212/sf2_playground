<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * Inventory
 */
 abstract class Inventory
{
    /**
     * @var integer
     */
    private $inventory_id;

    /**
     * @var string
     */
    private $category = '';

    /**
     * @var string
     */
    private $part_number = '';


    /**
     * Get inventoryId
     *
     * @return integer
     */
    public function getInventoryId()
    {
        return $this->inventory_id;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Inventory
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set partNumber
     *
     * @param string $partNumber
     *
     * @return Inventory
     */
    public function setPartNumber($partNumber)
    {
        $this->part_number = $partNumber;

        return $this;
    }

    /**
     * Get partNumber
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->part_number;
    }
}
