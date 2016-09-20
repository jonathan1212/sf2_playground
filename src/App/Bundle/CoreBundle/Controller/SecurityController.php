<?php

namespace App\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        $authorizationChecker = $this->get('security.authorization_checker');

        dump($authorizationChecker->isGranted('IS_AUTHENTICATED_FULLY'));
        if(
            !$authorizationChecker->isGranted('IS_AUTHENTICATED_FULLY') &&
            !$authorizationChecker->isGranted('IS_AUTHENTICATED_REMEMBERED')
        ) {

            dump('boom');
            //exit;

        }

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        dump($error);
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        dump($lastUsername);

        return $this->render(
            'AppCoreBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    /**
     * From Oauth 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function login2Action(Request $request)
    {
        $session = $request->getSession();

        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } elseif (null !== $session && $session->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        if ($error) {
            $error = $error->getMessage(
            ); // WARNING! Symfony source code identifies this line as a potential security threat.
        }

        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

        return $this->render(
            'AppCoreBundle:Security:login2.html.twig',
            array(
                'last_username' => $lastUsername,
                'error' => $error,
            )
        );
    }

    public function loginCheckAction(Request $request)  
    {  
     
     dump('hi login check');
     exit;

    }
}