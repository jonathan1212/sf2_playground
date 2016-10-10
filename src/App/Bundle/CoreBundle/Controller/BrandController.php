<?php

namespace App\Bundle\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BrandController extends Controller
{

    /**
     *  Multiple Access 
     */
    public function indexAction()
    {


        //$em = $this->get('doctrine')->getManager();
        //$em = $this->get('doctrine')->getManager('default');
        //$em = $this->get('doctrine.orm.default_entity_manager');

        $em = $this->getDoctrine()->getManager('yilinker');
        //$em = $this->get('doctrine')->getManager('yilinker');
        //$customerEm = $this->get('doctrine.orm.yilinker_entity_manager');


        $product = $em->getRepository('Yilinker:Brand')->findOne(1);

        dump($product);
        exit;

    }

    /**
     * http://mysymfony.local/brand/bar?token=pass1
     * 
     * Event Listener ON kernel controller and kernel response
     */
    public function barAction()
    {
        $res = new Response();

        /*var_dump($res->headers);
        exit;*/

        return $this->render('AppCoreBundle:Default:index.html.twig', array('name' => 'bad'));
    }
    
}
