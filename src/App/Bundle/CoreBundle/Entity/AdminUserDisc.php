<?php

namespace App\Bundle\CoreBundle\Entity;

/**
 * AdminUserDisc
 */
class AdminUserDisc extends User
{
    /**
     * @var \App\Bundle\CoreBundle\Entity\AdminUser
     */
    private $source;


    /**
     * Set source
     *
     * @param \App\Bundle\CoreBundle\Entity\AdminUser $source
     *
     * @return AdminUserDisc
     */
    public function setSource(\App\Bundle\CoreBundle\Entity\AdminUser $source = null)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return \App\Bundle\CoreBundle\Entity\AdminUser
     */
    public function getSource()
    {
        return $this->source;
    }
}
