<?php

namespace App\Bundle\CoreBundle\Entity;

//use App\Bundle\CoreBundle\Document\Product;

/**
 * OrderProduct
 */
class OrderProduct
{
    /**
     * @var integer
     */
    private $orderProductId;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $returnableQuantity;

    /**
     * @var string
     */
    private $totalPrice;

    /**
     * @var string
     */
    private $unitPrice;

    /**
     * @var string
     */
    private $origPrice;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var string
     */
    private $paymentMethodCharge;

    /**
     * @var string
     */
    private $yilinkerCharge;

    /**
     * @var string
     */
    private $handlingFee;

    /**
     * @var string
     */
    private $shippingFee = 0;

    /**
     * @var string
     */
    private $additionalCost = '0';

    /**
     * @var string
     */
    private $net;

    /**
     * @var string
     */
    private $commission = '0';

    /**
     * @var string
     */
    private $attributes;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var \DateTime
     */
    private $lastDateModified;

    /**
     * @var string
     */
    private $sku = '';

    /**
     * @var string
     */
    private $weight = '0';

    /**
     * @var string
     */
    private $length = '0';

    /**
     * @var string
     */
    private $width = '0';

    /**
     * @var string
     */
    private $height = '0';

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $shortDescription = '';

    /**
     * @var string
     */
    private $brandName = '';

    /**
     * @var string
     */
    private $manufacturerProductReference = '';

    /**
     * @var boolean
     */
    private $isNotShippable = '0';

    /**
     * @var integer
     */
    private $product;

    /**
     * @var \App\Bundle\CoreBundle\Entity\User
     */
    private $seller;

    /**
     * @var integer
     */
    private $productId;


    /**
     * Get orderProductId
     *
     * @return integer
     */
    public function getOrderProductId()
    {
        return $this->orderProductId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return OrderProduct
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set returnableQuantity
     *
     * @param integer $returnableQuantity
     *
     * @return OrderProduct
     */
    public function setReturnableQuantity($returnableQuantity)
    {
        $this->returnableQuantity = $returnableQuantity;

        return $this;
    }

    /**
     * Get returnableQuantity
     *
     * @return integer
     */
    public function getReturnableQuantity()
    {
        return $this->returnableQuantity;
    }

    /**
     * Set totalPrice
     *
     * @param string $totalPrice
     *
     * @return OrderProduct
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set unitPrice
     *
     * @param string $unitPrice
     *
     * @return OrderProduct
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get unitPrice
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set origPrice
     *
     * @param string $origPrice
     *
     * @return OrderProduct
     */
    public function setOrigPrice($origPrice)
    {
        $this->origPrice = $origPrice;

        return $this;
    }

    /**
     * Get origPrice
     *
     * @return string
     */
    public function getOrigPrice()
    {
        return $this->origPrice;
    }

    /**
     * Set productName
     *
     * @param string $productName
     *
     * @return OrderProduct
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set paymentMethodCharge
     *
     * @param string $paymentMethodCharge
     *
     * @return OrderProduct
     */
    public function setPaymentMethodCharge($paymentMethodCharge)
    {
        $this->paymentMethodCharge = $paymentMethodCharge;

        return $this;
    }

    /**
     * Get paymentMethodCharge
     *
     * @return string
     */
    public function getPaymentMethodCharge()
    {
        return $this->paymentMethodCharge;
    }

    /**
     * Set yilinkerCharge
     *
     * @param string $yilinkerCharge
     *
     * @return OrderProduct
     */
    public function setYilinkerCharge($yilinkerCharge)
    {
        $this->yilinkerCharge = $yilinkerCharge;

        return $this;
    }

    /**
     * Get yilinkerCharge
     *
     * @return string
     */
    public function getYilinkerCharge()
    {
        return $this->yilinkerCharge;
    }

    /**
     * Set handlingFee
     *
     * @param string $handlingFee
     *
     * @return OrderProduct
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
     * Set shippingFee
     *
     * @param string $shippingFee
     *
     * @return OrderProduct
     */
    public function setShippingFee($shippingFee)
    {
        $this->shippingFee = $shippingFee;

        return $this;
    }

    /**
     * Get shippingFee
     *
     * @return string
     */
    public function getShippingFee()
    {
        return $this->shippingFee;
    }

    /**
     * Set additionalCost
     *
     * @param string $additionalCost
     *
     * @return OrderProduct
     */
    public function setAdditionalCost($additionalCost)
    {
        $this->additionalCost = $additionalCost;

        return $this;
    }

    /**
     * Get additionalCost
     *
     * @return string
     */
    public function getAdditionalCost()
    {
        return $this->additionalCost;
    }

    /**
     * Set net
     *
     * @param string $net
     *
     * @return OrderProduct
     */
    public function setNet($net)
    {
        $this->net = $net;

        return $this;
    }

    /**
     * Get net
     *
     * @return string
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * Set commission
     *
     * @param string $commission
     *
     * @return OrderProduct
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set attributes
     *
     * @param string $attributes
     *
     * @return OrderProduct
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get attributes
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OrderProduct
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
     * Set lastDateModified
     *
     * @param \DateTime $lastDateModified
     *
     * @return OrderProduct
     */
    public function setLastDateModified($lastDateModified)
    {
        $this->lastDateModified = $lastDateModified;

        return $this;
    }

    /**
     * Get lastDateModified
     *
     * @return \DateTime
     */
    public function getLastDateModified()
    {
        return $this->lastDateModified;
    }

    /**
     * Set sku
     *
     * @param string $sku
     *
     * @return OrderProduct
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return OrderProduct
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set length
     *
     * @param string $length
     *
     * @return OrderProduct
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set width
     *
     * @param string $width
     *
     * @return OrderProduct
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param string $height
     *
     * @return OrderProduct
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return OrderProduct
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
     * @return OrderProduct
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
     * Set brandName
     *
     * @param string $brandName
     *
     * @return OrderProduct
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Get brandName
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Set manufacturerProductReference
     *
     * @param string $manufacturerProductReference
     *
     * @return OrderProduct
     */
    public function setManufacturerProductReference($manufacturerProductReference)
    {
        $this->manufacturerProductReference = $manufacturerProductReference;

        return $this;
    }

    /**
     * Get manufacturerProductReference
     *
     * @return string
     */
    public function getManufacturerProductReference()
    {
        return $this->manufacturerProductReference;
    }

    /**
     * Set isNotShippable
     *
     * @param boolean $isNotShippable
     *
     * @return OrderProduct
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
     * Set product
     *
     * @param integer $product
     *
     * @return OrderProduct
     */
    public function setProduct(\App\Bundle\CoreBundle\Document\Product $product)
    {   
        $this->setProductId($product->getId());
        //$this->productId = $product->getId();
        $this->product = $product;
    }

    /**
     * Get product
     *
     * @return integer
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set seller
     *
     * @param \App\Bundle\CoreBundle\Entity\User $seller
     *
     * @return OrderProduct
     */
    public function setSeller(\App\Bundle\CoreBundle\Entity\User $seller = null)
    {
        $this->seller = $seller;

        return $this;
    }

    /**
     * Get seller
     *
     * @return \App\Bundle\CoreBundle\Entity\User
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OrderProduct
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
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
}
