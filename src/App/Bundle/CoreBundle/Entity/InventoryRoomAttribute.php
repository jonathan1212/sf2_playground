<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * InventoryRoomAttribute
 */
class InventoryRoomAttribute extends InventoryRoom
{
    /**
     * @var string
     */
    private $attribute;

    /**
     * @var string
     */
    private $value = '';


    /**
     * Set attribute
     *
     * @param string $attribute
     *
     * @return InventoryRoomAttribute
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * Get attribute
     *
     * @return string
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return InventoryRoomAttribute
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
