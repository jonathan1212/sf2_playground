<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * CommentCountry
 */
class CommentCountry extends Comment
{
    /**
     * @var \App\Bundle\CoreBundle\Entity\Country
     */
    private $source;


    /**
     * Set source
     *
     * @param \App\Bundle\CoreBundle\Entity\Country $source
     *
     * @return CommentCountry
     */
    public function setSource(\App\Bundle\CoreBundle\Entity\Country $source = null)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return \App\Bundle\CoreBundle\Entity\Country
     */
    public function getSource()
    {
        return $this->source;
    }
}
