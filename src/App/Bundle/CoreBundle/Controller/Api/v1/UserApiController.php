<?php

namespace App\Bundle\CoreBundle\Controller\Api\v1;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OAuth2\OAuth2ServerException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
/**
 * User controller.
 *
 */
class UserApiController extends Controller
{

     /**
     * Login
     *
     * @ApiDoc(
     *     section="Store",
     *     statusCodes={
     *         200="Returned when successful",
     *         400="Invalid parameter request",
     *         401="Unauthorized Request",
     *         404="User not found",
     *     },
     *     parameters={
     *         {"name"="userId", "dataType"="integer", "required"=true, "description"="user id"},
     *     },
     * )
     * @param Request $request
     * @return JsonResponse
     */
    public function tokenAction(Request $request)
    {
        $oauthServer = $this->get('fos_oauth_server.server');
        try {
            $request->request->set('version', $request->get('version'));

            $response = $oauthServer->grantAccessToken($request);
            $content = $response->getContent();
            $jsonContent = json_decode($content, true);
            $token = $jsonContent['access_token'];

            $accessToken = $oauthServer->verifyAccessToken($token);

            return $response;
        } catch (OAuth2ServerException $e) {
            return $e->getHttpResponse();
        }
    }

    /**
     * Sample using oauth 2 authentication
     *
     * @ApiDoc(
     *     section="Store",
     *     statusCodes={
     *         200="Returned when successful",
     *         400="Invalid parameter request",
     *         401="Unauthorized Request",
     *         404="User not found",
     *     },
     *     parameters={
     *         {"name"="userId", "dataType"="integer", "required"=true, "description"="user id"},
     *     },
     * )
     * @param Request $request
     * @return JsonResponse
     */
    public function getInfoAction(Request $request)
    {
        //$user = $this->getUser();
        
        return new JsonResponse(array(
            'data' => 'success'
        ));
    }

}