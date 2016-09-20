<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var \DateTime
     */
    private $dateLastModified;

    /**
     * @var \DateTime
     */
    private $dateLastEmptied;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $shortDescription = '';

    /**
     * @var integer
     */
    private $clickCount = '0';

    /**
     * @var string
     */
    private $keywords = '';

    /**
     * @var integer
     */
    private $status = '0';

    /**
     * @var string
     */
    private $slug;

    /**
     * @var \App\Bundle\CoreBundle\Entity\Yilinker\Brand
     */
    private $brand;

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Product
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateLastModified
     *
     * @param \DateTime $dateLastModified
     *
     * @return Product
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
     * Set dateLastEmptied
     *
     * @param \DateTime $dateLastEmptied
     *
     * @return Product
     */
    public function setDateLastEmptied($dateLastEmptied)
    {
        $this->dateLastEmptied = $dateLastEmptied;

        return $this;
    }

    /**
     * Get dateLastEmptied
     *
     * @return \DateTime
     */
    public function getDateLastEmptied()
    {
        return $this->dateLastEmptied;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
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
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return Product
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set clickCount
     *
     * @param integer $clickCount
     *
     * @return Product
     */
    public function setClickCount($clickCount)
    {
        $this->clickCount = $clickCount;

        return $this;
    }

    /**
     * Get clickCount
     *
     * @return integer
     */
    public function getClickCount()
    {
        return $this->clickCount;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Product
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Product
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Product
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * @var \App\Bundle\CoreBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \App\Bundle\CoreBundle\Entity\User $user
     *
     * @return Product
     */
    public function setUser(\App\Bundle\CoreBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \App\Bundle\CoreBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set brand
     *
     * @param \App\Bundle\CoreBundle\Entity\Yilinker\Brand $brand
     *
     * @return Product
     */
    public function setBrand(\App\Bundle\CoreBundle\Entity\Yilinker\Brand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \App\Bundle\CoreBundle\Entity\Yilinker\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }
}
