<?php

namespace App\Bundle\CoreBundle\Document;



/**
 * App\Bundle\CoreBundle\Document\Association
 */
class Association
{
    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var object_id $sample_id
     */
    protected $sample_id;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var App\Bundle\CoreBundle\Document\Sample
     */
    protected $sample;


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
     * Set sampleId
     *
     * @param object_id $sampleId
     * @return self
     */
    public function setSampleId($sampleId)
    {
        $this->sample_id = $sampleId;
        return $this;
    }

    /**
     * Get sampleId
     *
     * @return object_id $sampleId
     */
    public function getSampleId()
    {
        return $this->sample_id;
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
     * Set sample
     *
     * @param App\Bundle\CoreBundle\Document\Sample $sample
     * @return self
     */
    public function setSample(\App\Bundle\CoreBundle\Document\Sample $sample)
    {
        $this->sample = $sample;
        return $this;
    }

    /**
     * Get sample
     *
     * @return App\Bundle\CoreBundle\Document\Sample $sample
     */
    public function getSample()
    {
        return $this->sample;
    }
}
