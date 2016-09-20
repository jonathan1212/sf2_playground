<?php

namespace App\Bundle\CoreBundle\Document;



/**
 * App\Bundle\CoreBundle\Document\Restaurants
 */
class Restaurants
{
    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var string $borough
     */
    protected $borough;


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
     * Set borough
     *
     * @param string $borough
     * @return self
     */
    public function setBorough($borough)
    {
        $this->borough = $borough;
        return $this;
    }

    /**
     * Get borough
     *
     * @return string $borough
     */
    public function getBorough()
    {
        return $this->borough;
    }
    /**
     * @var string $cuisine
     */
    protected $cuisine;

    /**
     * @var string $name
     */
    protected $name;


    /**
     * Set cuisine
     *
     * @param string $cuisine
     * @return self
     */
    public function setCuisine($cuisine)
    {
        $this->cuisine = $cuisine;
        return $this;
    }

    /**
     * Get cuisine
     *
     * @return string $cuisine
     */
    public function getCuisine()
    {
        return $this->cuisine;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var string $restaurant_id
     */
    protected $restaurant_id;


    /**
     * Set restaurantId
     *
     * @param string $restaurantId
     * @return self
     */
    public function setRestaurantId($restaurantId)
    {
        $this->restaurant_id = $restaurantId;
        return $this;
    }

    /**
     * Get restaurantId
     *
     * @return string $restaurantId
     */
    public function getRestaurantId()
    {
        return $this->restaurant_id;
    }
    /**
     * @var App\Bundle\CoreBundle\Document\Address
     */
    protected $address = array();

    public function __construct()
    {
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add address
     *
     * @param App\Bundle\CoreBundle\Document\Address $address
     */
    public function addAddress(\App\Bundle\CoreBundle\Document\Address $address)
    {
        $this->address[] = $address;
    }

    /**
     * Remove address
     *
     * @param App\Bundle\CoreBundle\Document\Address $address
     */
    public function removeAddress(\App\Bundle\CoreBundle\Document\Address $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection $address
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @var App\Bundle\CoreBundle\Document\Grades
     */
    protected $grades = array();


    /**
     * Add grade
     *
     * @param App\Bundle\CoreBundle\Document\Grades $grade
     */
    public function addGrade(\App\Bundle\CoreBundle\Document\Grades $grade)
    {
        $this->grades[] = $grade;
    }

    /**
     * Remove grade
     *
     * @param App\Bundle\CoreBundle\Document\Grades $grade
     */
    public function removeGrade(\App\Bundle\CoreBundle\Document\Grades $grade)
    {
        $this->grades->removeElement($grade);
    }

    /**
     * Get grades
     *
     * @return \Doctrine\Common\Collections\Collection $grades
     */
    public function getGrades()
    {
        return $this->grades;
    }
}
