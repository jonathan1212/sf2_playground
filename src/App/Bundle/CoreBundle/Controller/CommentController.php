<?php

namespace App\Bundle\CoreBundle\Controller;


use App\Bundle\CoreBundle\Entity\Comment;
use App\Bundle\CoreBundle\Entity\CommentCountry;
use App\Bundle\CoreBundle\Entity\CommentUser;
use App\Bundle\CoreBundle\Entity\CommentYiProduct;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class InventoryController
 * @package App\Bundle\CoreBundle\Entity
 *
 * Class Inheritance
 */
class CommentController extends Controller
{

    /**
     *  LabLogItem Blog
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppCoreBundle:Country')->find(1);
        $productx = $em->getRepository('AppCoreBundle:YiProduct')->find(1);
        //$user = $em->getReference("AppCoreBundle:User", 1);

        $x = $em->getRepository('AppCoreBundle:Comment')->find(3);
        dump($x);
        exit;
        $commentuser = new CommentCountry();

        $commentuser->setComment('badaw ka');
        $commentuser->setReason('reason');
        $commentuser->setSource($user);

        $em->persist($commentuser);

        $product = new CommentYiProduct();
        $product->setComment('hahaha');
        $product->setReason('reason');
        $product->setSource($productx);

        $em->persist($product);
        $em->flush();

        exit;
    }

}