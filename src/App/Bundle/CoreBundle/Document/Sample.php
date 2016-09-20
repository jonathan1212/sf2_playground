<?php

namespace App\Bundle\CoreBundle\Document;



/**
 * App\Bundle\CoreBundle\Document\Sample
 */
class Sample
{
    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var file $image
     */
    protected $image;

    /**
     * @var int $score
     */
    protected $score;

    /**
     * @var boolean $type
     */
    protected $type;

    /**
     * @var bin_func $funct
     */
    protected $funct;

    /**
     * @var increment $increment
     */
    protected $increment;

    /**
     * @var key $key
     */
    protected $key;

    /**
     * @var timestamp $today
     */
    protected $today;

    /**
     * @var raw $data
     */
    protected $data;

    /**
     * @var hash $password
     */
    protected $password;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var bin $bin
     */
    protected $bin;

    /**
     * @var bin_bytearray $bytearray
     */
    protected $bytearray;

    /**
     * @var bin_custom $bincustom
     */
    protected $bincustom;

    /**
     * @var bin_md5 $md5
     */
    protected $md5;

    /**
     * @var bin_uuid $uuid
     */
    protected $uuid;

    /**
     * @var object_id $object
     */
    protected $object;

    /**
     * @var App\Bundle\CoreBundle\Document\Association
     */
    protected $association = array();

    public function __construct()
    {
        $this->association = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set image
     *
     * @param file $image
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     *
     * @return file $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set score
     *
     * @param int $score
     * @return self
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Get score
     *
     * @return int $score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return boolean $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set funct
     *
     * @param bin_func $funct
     * @return self
     */
    public function setFunct($funct)
    {
        $this->funct = $funct;
        return $this;
    }

    /**
     * Get funct
     *
     * @return bin_func $funct
     */
    public function getFunct()
    {
        return $this->funct;
    }

    /**
     * Set increment
     *
     * @param increment $increment
     * @return self
     */
    public function setIncrement($increment)
    {
        $this->increment = $increment;
        return $this;
    }

    /**
     * Get increment
     *
     * @return increment $increment
     */
    public function getIncrement()
    {
        return $this->increment;
    }

    /**
     * Set key
     *
     * @param key $key
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Get key
     *
     * @return key $key
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set today
     *
     * @param timestamp $today
     * @return self
     */
    public function setToday($today)
    {
        $this->today = $today;
        return $this;
    }

    /**
     * Get today
     *
     * @return timestamp $today
     */
    public function getToday()
    {
        return $this->today;
    }

    /**
     * Set data
     *
     * @param raw $data
     * @return self
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Get data
     *
     * @return raw $data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set password
     *
     * @param hash $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return hash $password
     */
    public function getPassword()
    {
        return $this->password;
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
     * Set bin
     *
     * @param bin $bin
     * @return self
     */
    public function setBin($bin)
    {
        $this->bin = $bin;
        return $this;
    }

    /**
     * Get bin
     *
     * @return bin $bin
     */
    public function getBin()
    {
        return $this->bin;
    }

    /**
     * Set bytearray
     *
     * @param bin_bytearray $bytearray
     * @return self
     */
    public function setBytearray($bytearray)
    {
        $this->bytearray = $bytearray;
        return $this;
    }

    /**
     * Get bytearray
     *
     * @return bin_bytearray $bytearray
     */
    public function getBytearray()
    {
        return $this->bytearray;
    }

    /**
     * Set bincustom
     *
     * @param bin_custom $bincustom
     * @return self
     */
    public function setBincustom($bincustom)
    {
        $this->bincustom = $bincustom;
        return $this;
    }

    /**
     * Get bincustom
     *
     * @return bin_custom $bincustom
     */
    public function getBincustom()
    {
        return $this->bincustom;
    }

    /**
     * Set md5
     *
     * @param bin_md5 $md5
     * @return self
     */
    public function setMd5($md5)
    {
        $this->md5 = $md5;
        return $this;
    }

    /**
     * Get md5
     *
     * @return bin_md5 $md5
     */
    public function getMd5()
    {
        return $this->md5;
    }

    /**
     * Set uuid
     *
     * @param bin_uuid $uuid
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        return $this;
    }

    /**
     * Get uuid
     *
     * @return bin_uuid $uuid
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set object
     *
     * @param object_id $object
     * @return self
     */
    public function setObject($object)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * Get object
     *
     * @return object_id $object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Add association
     *
     * @param App\Bundle\CoreBundle\Document\Association $association
     */
    public function addAssociation(\App\Bundle\CoreBundle\Document\Association $association)
    {
        $this->association[] = $association;
    }

    /**
     * Remove association
     *
     * @param App\Bundle\CoreBundle\Document\Association $association
     */
    public function removeAssociation(\App\Bundle\CoreBundle\Document\Association $association)
    {
        $this->association->removeElement($association);
    }

    /**
     * Get association
     *
     * @return \Doctrine\Common\Collections\Collection $association
     */
    public function getAssociation()
    {
        return $this->association;
    }
}
