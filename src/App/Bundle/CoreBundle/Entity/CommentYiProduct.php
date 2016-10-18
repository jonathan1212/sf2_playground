<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * CommentYiProduct
 */
class CommentYiProduct extends Comment
{
    /**
     * @var \App\Bundle\CoreBundle\Entity\YiProduct
     */
    private $source;


    /**
     * Set source
     *
     * @param \App\Bundle\CoreBundle\Entity\YiProduct $source
     *
     * @return CommentYiProduct
     */
    public function setSource(\App\Bundle\CoreBundle\Entity\YiProduct $source = null)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return \App\Bundle\CoreBundle\Entity\YiProduct
     */
    public function getSource()
    {
        return $this->source;
    }
}
