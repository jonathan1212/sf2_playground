<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * InventoryTable
 */
class InventoryTable extends Inventory
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $quantity = '';


    /**
     * Set name
     *
     * @param string $name
     *
     * @return InventoryTable
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
     * Set quantity
     *
     * @param string $quantity
     *
     * @return InventoryTable
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
