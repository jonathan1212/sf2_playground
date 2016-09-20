<?php

namespace App\Bundle\CoreBundle\Document;



/**
 * App\Bundle\CoreBundle\Document\Address
 */
class Address
{
    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var string $building
     */
    protected $building;

    /**
     * @var string $street
     */
    protected $street;

    /**
     * @var string $zipcode
     */
    protected $zipcode;

    /**
     * @var collection $coord
     */
    protected $coord;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set building
     *
     * @param string $building
     * @return self
     */
    public function setBuilding($building)
    {
        $this->building = $building;
        return $this;
    }

    /**
     * Get building
     *
     * @return string $building
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Get street
     *
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return self
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string $zipcode
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set coord
     *
     * @param collection $coord
     * @return self
     */
    public function setCoord($coord)
    {
        $this->coord = $coord;
        return $this;
    }

    /**
     * Get coord
     *
     * @return collection $coord
     */
    public function getCoord()
    {
        return $this->coord;
    }
}
