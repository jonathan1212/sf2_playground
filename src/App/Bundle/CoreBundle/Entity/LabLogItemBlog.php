<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * LabLogItemBlog
 */
class LabLogItemBlog extends LabLogItem
{
    /**
     * @var string
     */
    private $content;


    /**
     * Set content
     *
     * @param string $content
     *
     * @return LabLogItemBlog
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
