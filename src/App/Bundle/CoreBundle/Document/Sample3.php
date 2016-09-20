<?php

namespace App\Bundle\CoreBundle\Document;



/**
 * App\Bundle\CoreBundle\Document\Sample3
 */
class Sample3
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
     * @var object_id $association_id
     */
    protected $association_id;


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
     * Set associationId
     *
     * @param object_id $associationId
     * @return self
     */
    public function setAssociationId($associationId)
    {
        $this->association_id = $associationId;
        return $this;
    }

    /**
     * Get associationId
     *
     * @return object_id $associationId
     */
    public function getAssociationId()
    {
        return $this->association_id;
    }
}
