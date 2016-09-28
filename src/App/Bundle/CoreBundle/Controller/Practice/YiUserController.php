<?php

namespace App\Bundle\CoreBundle\Controller\Practice;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Bundle\CoreBundle\Entity\User;
use App\Bundle\CoreBundle\Form\UserType;
use App\Bundle\CoreBundle\Entity\YiUser;

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

        $userwarehouse = $em->getRepository('AppCoreBundle:YiUserwarehouse')->find(1);

        foreach($userwarehouse->getYiProductwarehouses() as $each) {
            dump($each);
        }        

        return $this->render('AppCoreBundle:Default:index.html.twig', array('name' => 'test'));
    }


    public function newAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();

        $form = $this->createForm('user_info', new YiUser(), array());
        
        $form->handleRequest($request);

        if ($form->isValid()) {

            $yiuser = $form->getData();
            $em->persist($yiuser);
            $em->flush();
            
            dump($form->getData());
            exit;
        }

        $form = $form->createView();

        $data = compact(
            'form'
        );   

        return $this->render('AppCoreBundle:Practice:new.html.twig', $data);   
    }


    public function editAction(Request $request)
    {
        $id = $request->get('id');

        $em = $this->get('doctrine')->getManager();

        $yiUser = $em->getRepository('AppCoreBundle:YiUser')->find($id);

        $form = $this->createForm('user_info', $yiUser, array('excludedId' => $yiUser->getUserId()));
        
        $form->handleRequest($request);

        if ($form->isValid()) {

            $em->flush();
            

            dump($form->getData());
            exit;
        }

        $form = $form->createView();

        $data = compact(
            'form'
        );   

        return $this->render('AppCoreBundle:Practice:new.html.twig', $data);   

    }
   
    public function formAction()
    {
        $formData = [
            'email' => $request->get('email', null),
            'plainPassword' => array(
                "first" => $request->get('password', null),
                "second" => $request->get('password', null)
            ),
            'firstName' => $request->get('firstName', null),
            'lastName' => $request->get('lastName', null),
            'contactNumber' => $request->get('contactNumber', null),
            '_token' => $request->get('_token'),
        ];

        $form = $this->createForm('core_v1_user_add', new User(), array(
            'csrf_protection' => false,
            'excludeUserId' => !is_null($guest)? $guest->getUserId() : null
        ));

        $form->submit($formData);

        if ($form->isValid()) {
            $validatedData = $form->getData();
        }
        

        $form = $this->createForm('user_guest', $user);
        $form = $this->createForm('user_address', null, array('user' => $this->getUser()));
            $form->handleRequest($request);
            if ($form->isValid()) {
                $address = $form->getData();
                $this->checkoutService->addAddress($address);
                $form = $this->createForm('user_address', null, array('user' => $this->getUser()));
                $checkoutUser = $this->checkoutService->getCheckoutUser();
                if (!($this->getUser() instanceof User) && $checkoutUser->getIsMobileVerified()) {
                    $this->checkoutService->setDeliveryAddress($address->getUserAddressId());

                    return $this->redirect($this->generateUrl('checkout_payment'));
                }
            }
            $form = $form->createView();

    }


}
