<?php

namespace App\Bundle\CoreBundle\Controller;

use App\Bundle\CoreBundle\Entity\LabLogItem;
use App\Bundle\CoreBundle\Entity\LabLogItemBlog;
use App\Bundle\CoreBundle\Entity\LabLogItemEvent;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class LabLogItemController
 * @package App\Bundle\CoreBundle\Controller
 *
 *  example of class inheritance
 */
class LabLogItemController extends Controller
{

    /**
     *  LabLogItem Blog
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        /*$x = $em->getRepository('AppCoreBundle:LabLogItemEvent')->find(2);
        dump($x);
        exit;*/

        $lablogitem = new LabLogItemBlog();
        $lablogitem->setTitle('title');
        $lablogitem->setContent('content');
        $lablogitem->setDateCreated(Carbon::now());
        $lablogitem->setDateLastModified(Carbon::now());

        $em->persist($lablogitem);
        $em->flush();

        exit;
    }


    /**
     *  LabLogItem Blog
     */
    public function eventAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lablogitem = new LabLogItemEvent();
        $lablogitem->setTitle('title');
        $lablogitem->setDescription('description');
        $lablogitem->setLocation('location');
        $lablogitem->setDateCreated(Carbon::now());
        $lablogitem->setDateLastModified(Carbon::now());
        $lablogitem->setRequiresRegistration(Carbon::now());

        $em->persist($lablogitem);
        $em->flush();

        exit;
    }


}
