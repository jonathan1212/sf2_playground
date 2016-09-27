<?php

namespace App\Bundle\CoreBundle\Controller\Practice;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Bundle\CoreBundle\Entity\User;
use App\Bundle\CoreBundle\Form\UserType;

/**
 * User controller.
 *
 */
class YiUserController extends Controller
{

    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppCoreBundle:YiUser')->find(1);

        
        foreach($user->getYiUserWarehouses() as $each) {
            dump($each);
        }

        return $this->render('AppCoreBundle:Default:index.html.twig', array('name' => 'test'));
    }
   
     
    
    
}
