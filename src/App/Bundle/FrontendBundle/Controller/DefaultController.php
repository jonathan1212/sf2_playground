<?php

namespace App\Bundle\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AppFrontendBundle:Default:index.html.twig', array('name' => $name));
    }
}
