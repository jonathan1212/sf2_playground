<?php

namespace App\Bundle\CoreBundle\Entity;

use FOS\OAuthServerBundle\Entity\AuthCode as BaseAuthCode;

/**
 * OauthAuthCode
 */
class OauthAuthCode extends BaseAuthCode
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \App\Bundle\CoreBundle\Entity\OauthClient
     */
    protected $client;

    /**
     * @var \App\Bundle\CoreBundle\Entity\User
     */
    protected $user;

}
