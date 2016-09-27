<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * YiProduct
 */
class YiProduct
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $brandId;

    /**
     * @var integer
     */
    private $productCategoryId;

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
     * @var integer
     */
    private $clickCount = '0';

    /**
     * @var string
     */
    private $keywords = '';

    /**
     * @var string
     */
    private $slug;

    /**
     * @var integer
     */
    private $conditionId;

    /**
     * @var boolean
     */
    private $isCod = '0';

    /**
     * @var boolean
     */
    private $isFreeShipping = '0';

    /**
     * @var string
     */
    private $shortdescription = '';

    /**
     * @var integer
     */
    private $status = '0';

    /**
     * @var string
     */
    private $youtubeVideoUrl = '';

    /**
     * @var integer
     */
    private $shippingCategoryId;

    /**
     * @var boolean
     */
    private $isNotShippable = '0';

    /**
     * @var string
     */
    private $defaultLocale = 'en';

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $yiProductwarehouses;

    /**
     * @var \App\Bundle\CoreBundle\Entity\YiUser
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->yiProductwarehouses = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set brandId
     *
     * @param integer $brandId
     *
     * @return YiProduct
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * Get brandId
     *
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * Set productCategoryId
     *
     * @param integer $productCategoryId
     *
     * @return YiProduct
     */
    public function setProductCategoryId($productCategoryId)
    {
        $this->productCategoryId = $productCategoryId;

        return $this;
    }

    /**
     * Get productCategoryId
     *
     * @return integer
     */
    public function getProductCategoryId()
    {
        return $this->productCategoryId;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return YiProduct
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
     * @return YiProduct
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
     * @return YiProduct
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
     * @return YiProduct
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
     * @return YiProduct
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
     * Set clickCount
     *
     * @param integer $clickCount
     *
     * @return YiProduct
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
     * @return YiProduct
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
     * Set slug
     *
     * @param string $slug
     *
     * @return YiProduct
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
     * Set conditionId
     *
     * @param integer $conditionId
     *
     * @return YiProduct
     */
    public function setConditionId($conditionId)
    {
        $this->conditionId = $conditionId;

        return $this;
    }

    /**
     * Get conditionId
     *
     * @return integer
     */
    public function getConditionId()
    {
        return $this->conditionId;
    }

    /**
     * Set isCod
     *
     * @param boolean $isCod
     *
     * @return YiProduct
     */
    public function setIsCod($isCod)
    {
        $this->isCod = $isCod;

        return $this;
    }

    /**
     * Get isCod
     *
     * @return boolean
     */
    public function getIsCod()
    {
        return $this->isCod;
    }

    /**
     * Set isFreeShipping
     *
     * @param boolean $isFreeShipping
     *
     * @return YiProduct
     */
    public function setIsFreeShipping($isFreeShipping)
    {
        $this->isFreeShipping = $isFreeShipping;

        return $this;
    }

    /**
     * Get isFreeShipping
     *
     * @return boolean
     */
    public function getIsFreeShipping()
    {
        return $this->isFreeShipping;
    }

    /**
     * Set shortdescription
     *
     * @param string $shortdescription
     *
     * @return YiProduct
     */
    public function setShortdescription($shortdescription)
    {
        $this->shortdescription = $shortdescription;

        return $this;
    }

    /**
     * Get shortdescription
     *
     * @return string
     */
    public function getShortdescription()
    {
        return $this->shortdescription;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return YiProduct
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
     * Set youtubeVideoUrl
     *
     * @param string $youtubeVideoUrl
     *
     * @return YiProduct
     */
    public function setYoutubeVideoUrl($youtubeVideoUrl)
    {
        $this->youtubeVideoUrl = $youtubeVideoUrl;

        return $this;
    }

    /**
     * Get youtubeVideoUrl
     *
     * @return string
     */
    public function getYoutubeVideoUrl()
    {
        return $this->youtubeVideoUrl;
    }

    /**
     * Set shippingCategoryId
     *
     * @param integer $shippingCategoryId
     *
     * @return YiProduct
     */
    public function setShippingCategoryId($shippingCategoryId)
    {
        $this->shippingCategoryId = $shippingCategoryId;

        return $this;
    }

    /**
     * Get shippingCategoryId
     *
     * @return integer
     */
    public function getShippingCategoryId()
    {
        return $this->shippingCategoryId;
    }

    /**
     * Set isNotShippable
     *
     * @param boolean $isNotShippable
     *
     * @return YiProduct
     */
    public function setIsNotShippable($isNotShippable)
    {
        $this->isNotShippable = $isNotShippable;

        return $this;
    }

    /**
     * Get isNotShippable
     *
     * @return boolean
     */
    public function getIsNotShippable()
    {
        return $this->isNotShippable;
    }

    /**
     * Set defaultLocale
     *
     * @param string $defaultLocale
     *
     * @return YiProduct
     */
    public function setDefaultLocale($defaultLocale)
    {
        $this->defaultLocale = $defaultLocale;

        return $this;
    }

    /**
     * Get defaultLocale
     *
     * @return string
     */
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }

    /**
     * Add yiProductwarehouse
     *
     * @param \App\Bundle\CoreBundle\Entity\YiProductwarehouse $yiProductwarehouse
     *
     * @return YiProduct
     */
    public function addYiProductwarehouse(\App\Bundle\CoreBundle\Entity\YiProductwarehouse $yiProductwarehouse)
    {
        $this->yiProductwarehouses[] = $yiProductwarehouse;

        return $this;
    }

    /**
     * Remove yiProductwarehouse
     *
     * @param \App\Bundle\CoreBundle\Entity\YiProductwarehouse $yiProductwarehouse
     */
    public function removeYiProductwarehouse(\App\Bundle\CoreBundle\Entity\YiProductwarehouse $yiProductwarehouse)
    {
        $this->yiProductwarehouses->removeElement($yiProductwarehouse);
    }

    /**
     * Get yiProductwarehouses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getYiProductwarehouses()
    {
        return $this->yiProductwarehouses;
    }

    /**
     * Set user
     *
     * @param \App\Bundle\CoreBundle\Entity\YiUser $user
     *
     * @return YiProduct
     */
    public function setUser(\App\Bundle\CoreBundle\Entity\YiUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \App\Bundle\CoreBundle\Entity\YiUser
     */
    public function getUser()
    {
        return $this->user;
    }
}
