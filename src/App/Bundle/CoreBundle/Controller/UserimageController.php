<?php

namespace App\Bundle\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Bundle\CoreBundle\Entity\Userimage;
use App\Bundle\CoreBundle\Form\UserimageType;

/**
 * Userimage controller.
 *
 */
class UserimageController extends Controller
{

    /**
     * Lists all Userimage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppCoreBundle:Userimage')->findAll();

        return $this->render('AppCoreBundle:Userimage:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Userimage entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Userimage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('userimage_show', array('id' => $entity->getId())));
        }

        return $this->render('AppCoreBundle:Userimage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Userimage entity.
     *
     * @param Userimage $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Userimage $entity)
    {
        $form = $this->createForm(new UserimageType(), $entity, array(
            'action' => $this->generateUrl('userimage_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Userimage entity.
     *
     */
    public function newAction()
    {
        $entity = new Userimage();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppCoreBundle:Userimage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Userimage entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppCoreBundle:Userimage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Userimage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppCoreBundle:Userimage:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Userimage entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppCoreBundle:Userimage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Userimage entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppCoreBundle:Userimage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Userimage entity.
    *
    * @param Userimage $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Userimage $entity)
    {
        $form = $this->createForm(new UserimageType(), $entity, array(
            'action' => $this->generateUrl('userimage_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Userimage entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppCoreBundle:Userimage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Userimage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('userimage_edit', array('id' => $id)));
        }

        return $this->render('AppCoreBundle:Userimage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Userimage entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppCoreBundle:Userimage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Userimage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('userimage'));
    }

    /**
     * Creates a form to delete a Userimage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('userimage_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
