<?php

namespace App\Bundle\CoreBundle\Controller\Practice;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Bundle\CoreBundle\Form\YiProductwarehouseType;
use App\Bundle\CoreBundle\Entity\YiProductwarehouse;
use Symfony\Component\HttpFoundation\File\File;

/**
 * User controller.
 *
 */
class YiProductWarehouseController extends Controller
{

    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        
    }

    public function listAction(Request $request)
    {
        $page = $request->get('page',1);

        $em = $this->get('doctrine')->getManager();

        $users = $em->getRepository('AppCoreBundle:YiUser')->getList($page);

        return $this->render('AppCoreBundle:Practice:list.html.twig', compact('users'));   
    }

    public function newAction(Request $request)
    {

        $em = $this->get('doctrine')->getManager();

        $form = $this->createForm('product_warehouse', new YiProductwarehouse(), array());
        
        $form->handleRequest($request);

        if ($form->isValid()) {

            $yiProductwarehouse = $form->getData();
                
            $em->persist($yiProductwarehouse);
            $em->flush();
            
            dump($form->getData());
            exit;
        }

        $form = $form->createView();

        $data = compact(
            'form'
        );   

        return $this->render('AppCoreBundle:YiProductWarehouse:new.html.twig', $data);
    }


    public function editAction(Request $request)
    {
        $id = $request->get('id');

        $em = $this->get('doctrine')->getManager();

        $yProductwarehouse = $em->getRepository('AppCoreBundle:YiProductwarehouse')->find($id);

        $form = $this->createForm('product_warehouse', $yProductwarehouse);
        
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

        return $this->render('AppCoreBundle:YiProductWarehouse:new.html.twig', $data);
    }

}
