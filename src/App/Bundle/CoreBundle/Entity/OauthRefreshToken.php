<?php

namespace App\Bundle\CoreBundle\Entity;

use FOS\OAuthServerBundle\Entity\RefreshToken as BaseRefreshToken;

/**
 * OauthRefreshToken
 */
class OauthRefreshToken extends BaseRefreshToken
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
