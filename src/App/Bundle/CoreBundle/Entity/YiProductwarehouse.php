<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * YiProductwarehouse
 */
class YiProductwarehouse
{
    /**
     * @var integer
     */
    private $productWarehouseId;
    
    /**
     * @var integer
     */
    private $priority;

    /**
     * @var string
     */
    private $countryCode = 'ph';

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $logisticsId = '1';

    /**
     * @var boolean
     */
    private $isCod = '0';

    /**
     * @var string
     */
    private $handlingFee = '0.0000';

    /**
     * @var \App\Bundle\CoreBundle\Entity\YiUserwarehouse
     */
    private $userWarehouse;

    private static $code = array(
        1 => 'ph',
        2 => 'en'
    );

    public static function getCode($code = null)
    {
        return  is_null($code) ? self::$code : self::$code[$code];
    }

    /**
     * Get productWarehouseId
     *
     * @return integer
     */
    public function getProductWarehouseId()
    {
        return $this->productWarehouseId;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return YiProductwarehouse
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set countryCode
     *
     * @param string $countryCode
     *
     * @return YiProductwarehouse
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return YiProductwarehouse
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set logisticsId
     *
     * @param integer $logisticsId
     *
     * @return YiProductwarehouse
     */
    public function setLogisticsId($logisticsId)
    {
        $this->logisticsId = $logisticsId;

        return $this;
    }

    /**
     * Get logisticsId
     *
     * @return integer
     */
    public function getLogisticsId()
    {
        return $this->logisticsId;
    }

    /**
     * Set isCod
     *
     * @param boolean $isCod
     *
     * @return YiProductwarehouse
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
     * Set handlingFee
     *
     * @param string $handlingFee
     *
     * @return YiProductwarehouse
     */
    public function setHandlingFee($handlingFee)
    {
        $this->handlingFee = $handlingFee;

        return $this;
    }

    /**
     * Get handlingFee
     *
     * @return string
     */
    public function getHandlingFee()
    {
        return $this->handlingFee;
    }

    /**
     * Set userWarehouse
     *
     * @param \App\Bundle\CoreBundle\Entity\YiUserwarehouse $userWarehouse
     *
     * @return YiProductwarehouse
     */
    public function setUserWarehouse(\App\Bundle\CoreBundle\Entity\YiUserwarehouse $userWarehouse = null)
    {
        $this->userWarehouse = $userWarehouse;

        return $this;
    }

    /**
     * Get userWarehouse
     *
     * @return \App\Bundle\CoreBundle\Entity\YiUserwarehouse
     */
    public function getUserWarehouse()
    {
        return $this->userWarehouse;
    }
    /**
     * @var \App\Bundle\CoreBundle\Entity\YiProduct
     */
    private $product;


    /**
     * Set product
     *
     * @param \App\Bundle\CoreBundle\Entity\YiProduct $product
     *
     * @return YiProductwarehouse
     */
    public function setProduct(\App\Bundle\CoreBundle\Entity\YiProduct $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \App\Bundle\CoreBundle\Entity\YiProduct
     */
    public function getProduct()
    {
        return $this->product;
    }
}
