<?php

namespace App\Bundle\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;

use Buzz\Message\Form\FormRequest;
use Buzz\Message\Response;
use Buzz\Client\Curl;
use Buzz\Exception\RequestException;


class BuzzController extends Controller
{

    const API_PICKUP_TIMEOUT_SEC = 10;


    /**
     *  Multiple Access 
     */
    public function indexAction()
    {

        $response = array();
       $request = new FormRequest(
                FormRequest::METHOD_POST, '/buzz/get', 'http://mysymfony.local'
            );

        $parameters = array('shipper' => array('email' => 'email', 'firstname' => 'fistname'));


        $request->setFields($parameters);
        $client = new Curl();
        $buzzResponse = new Response();
        $client->setTimeout(self::API_PICKUP_TIMEOUT_SEC);
        $client->send($request, $buzzResponse);

        if ($buzzResponse->isSuccessful()) {
            $response['isSuccessful'] = true;
            //$response['data'] = ArrayHelper::array_column($products, 'orderProductId');
        }

        dump($response);
        exit;

    }

    public function getAction(Request $request)
    {
        $all = $request->request->all();

        //dump($request);
        $filesystem = $this->get('filesystem');

        $filesystem->dumpFile("/Users/jonathan/Sites/yilinker-online/app/frontend/logs/test.txt",json_encode($all));

        exit;
    }
    
}
