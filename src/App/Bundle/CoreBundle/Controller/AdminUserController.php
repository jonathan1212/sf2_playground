<?php

namespace App\Bundle\CoreBundle\Controller;

use App\Bundle\CoreBundle\Entity\AdminUser;
use App\Bundle\CoreBundle\Entity\AdminUserDisc;
use App\Bundle\CoreBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminUserController extends Controller
{

    /**
     *  Multiple Access 
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $adminuserdisc = new AdminUserDisc();


        $adminuser = new AdminUser();
        $adminuser->setRole('admin');

        $user = new User;
        $user->setFirstName('jonathan 2');
        $user->setLastName('antivo');
        $user->setPassword('xxx');



        //$adminuserdisc->setSource($adminuser);


        //$user = new User();

        //$em->getRepository('AppCoreBundle:AdminUser');
        $em->persist($user);
        //$em->persist($adminuser);
        //$em->persist($adminuserdisc);

        $em->flush();

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
