<?php

namespace App\Bundle\CoreBundle\Security;

use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Yilinker\Bundle\CoreBundle\Entity\User;
use Yilinker\Bundle\CoreBundle\Entity\Store;
use Carbon\Carbon;

class LogoutHandler implements LogoutSuccessHandlerInterface
{
    private $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function onLogoutSuccess(Request $request)
    {
        $ts = $this->container->get('security.token_storage');
        $router = $this->container->get('router');

        $token = $ts->getToken();
        if ($token) {
            $user = $token->getUser();
            
            if ($user instanceof User) {
                $user->setLastLogoutDate(Carbon::now());
                $em = $this->container->get('doctrine.orm.default_entity_manager');
                $em->flush();


                /*if(
                    $user->getUserType() == User::USER_TYPE_SELLER && 
                    !is_null($user->getStore()) &&
                    $user->getStore()->getStoreType() == Store::STORE_TYPE_RESELLER
                ){
                    return new RedirectResponse($router->generate('user_affiliate_login'));
                }*/
            }
        }
        
        dump('ok logout');
        exit;

        return new RedirectResponse($router->generate('default'));
    }


}
