<?php

namespace App\Bundle\CoreBundle\Controller\Practice;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class YiLocationController extends Controller
{

    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->get('doctrine')->getManager();


        $yilocation = $em->getRepository('AppCoreBundle:YiLocation')->find(1);

        dump($yilocation);
        exit;
        return $this->render('AppCoreBundle:Default:index.html.twig', array('name' => 'asdf'));

    }

    public function listAction(Request $request)
    {
        $page = $request->get('page',1);

    }

}