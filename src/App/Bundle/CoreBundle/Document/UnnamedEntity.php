<?php

namespace App\Bundle\CoreBundle\Document;



/**
 * App\Bundle\CoreBundle\Document\UnnamedEntity
 */
class UnnamedEntity
{
    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var raw $countryid
     */
    protected $countryid;

    /**
     * @var date $start_date
     */
    protected $start_date;

    /**
     * @var key $product
     */
    protected $product;

    /**
     * @var App\Bundle\CoreBundle\Document\UnnamedEntity2
     */
    protected $address = array();

    /**
     * @var App\Bundle\CoreBundle\Document\UnnamedEntity
     */
    protected $prod;

    /**
     * @var App\Bundle\CoreBundle\Document\UnnamedEntity
     */
    protected $order = array();

    public function __construct()
    {
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
        $this->order = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set countryid
     *
     * @param raw $countryid
     * @return self
     */
    public function setCountryid($countryid)
    {
        $this->countryid = $countryid;
        return $this;
    }

    /**
     * Get countryid
     *
     * @return raw $countryid
     */
    public function getCountryid()
    {
        return $this->countryid;
    }

    /**
     * Set startDate
     *
     * @param date $startDate
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;
        return $this;
    }

    /**
     * Get startDate
     *
     * @return date $startDate
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set product
     *
     * @param key $product
     * @return self
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Get product
     *
     * @return key $product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Add address
     *
     * @param App\Bundle\CoreBundle\Document\UnnamedEntity2 $address
     */
    public function addAddress(\App\Bundle\CoreBundle\Document\UnnamedEntity2 $address)
    {
        $this->address[] = $address;
    }

    /**
     * Remove address
     *
     * @param App\Bundle\CoreBundle\Document\UnnamedEntity2 $address
     */
    public function removeAddress(\App\Bundle\CoreBundle\Document\UnnamedEntity2 $address)
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
     * Set prod
     *
     * @param App\Bundle\CoreBundle\Document\UnnamedEntity $prod
     * @return self
     */
    public function setProd(\App\Bundle\CoreBundle\Document\UnnamedEntity $prod)
    {
        $this->prod = $prod;
        return $this;
    }

    /**
     * Get prod
     *
     * @return App\Bundle\CoreBundle\Document\UnnamedEntity $prod
     */
    public function getProd()
    {
        return $this->prod;
    }

    /**
     * Add order
     *
     * @param App\Bundle\CoreBundle\Document\UnnamedEntity $order
     */
    public function addOrder(\App\Bundle\CoreBundle\Document\UnnamedEntity $order)
    {
        $this->order[] = $order;
    }

    /**
     * Remove order
     *
     * @param App\Bundle\CoreBundle\Document\UnnamedEntity $order
     */
    public function removeOrder(\App\Bundle\CoreBundle\Document\UnnamedEntity $order)
    {
        $this->order->removeElement($order);
    }

    /**
     * Get order
     *
     * @return \Doctrine\Common\Collections\Collection $order
     */
    public function getOrder()
    {
        return $this->order;
    }
}
