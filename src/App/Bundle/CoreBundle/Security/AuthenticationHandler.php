<?php

namespace App\Bundle\CoreBundle\Security;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;


/**
 * Class AuthenticationHandler
 * @package Yilinker\Bundle\FrontendBundle\Services\Authenticate
 */
class AuthenticationHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface
{
    private $router;

    private $session;

    private $container;

    /**
     * Constructor
     * @param RouterInterface $router
     * @param Session $session
     */
    public function __construct(RouterInterface $router, Session $session, $container)
    {
        $this->router  = $router;
        $this->session = $session;
        $this->container = $container;
    }

    /**
     * onAuthenticationSuccess
     *
     * @param Request $request
     * @param TokenInterface $token
     * @return Response
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        /**
         * Refresh CSRF token for default intention to avoid session fixation attacks
         */
        $csrfTokenManager = $this->container->get('security.csrf.token_manager');
        $csrfTokenManager->refreshToken($this->container->getParameter('csrf_default_intention'));
        
        $authenticatedUser = $token->getUser();
        
        dump($authenticatedUser);
        exit;

        if ( $request->isXmlHttpRequest() ) {
            $response = new JsonResponse(array(
                'success' => true
            ));
            
            $response->headers->set( 'Content-Type', 'application/json' );

            return $response;
        }
        else {
            if ( $this->session->get('_security.main.target_path' ) ) {
                $url = $this->session->get( '_security.main.target_path' );
            }
            elseif ($request->get('_target_path_success')) {
                $url = $this->router->generate($request->get('_target_path_success'));
            }
            elseif ($request->get('_target_path')) {
                $url = $this->router->generate($request->get('_target_path'));
            }
            else {
                $url = $this->router->generate('user');
            }

            return new RedirectResponse($url);
        }
    }

    /**
     * onAuthenticationFailure
     *
     * @param Request $request
     * @param AuthenticationException $exception
     * @return Response
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception )
    {
        /*dump($request->headers->all());
        exit;*/
        
        if ( $request->isXmlHttpRequest() ) {
            $array = array( 'success' => false, 'message' => $exception->getMessage() );
            $response = new JsonResponse( $array );
            $response->headers->set( 'Content-Type', 'application/json' );

            return $response;
        } 
        else {
            $request->getSession()->set(SecurityContextInterface::AUTHENTICATION_ERROR, $exception);

            if ($request->get('_target_path_error')) {
                $url = $this->router->generate($request->get('_target_path_error'));
            }
            elseif ($request->get('_target_path')) {
                $url = $this->router->generate($request->get('_target_path'));
            }
            else {
                $url = $this->router->generate('app_login');
            }

            return new RedirectResponse($url);
        }
    }
}
