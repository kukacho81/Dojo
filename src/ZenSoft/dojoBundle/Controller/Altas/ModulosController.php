<?php

namespace ZenSoft\dojoBundle\Controller\Altas;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ZenSoft\dojoBundle\Entity\Altas\Modulos;
use ZenSoft\dojoBundle\Form\Altas\ModulosType;

/**
 * Altas\Modulos controller.
 *
 */
class ModulosController extends Controller
{

    /**
     * Lists all Altas\Modulos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ZenSoftdojoBundle:Altas\Modulos')->findAll();

        return $this->render('ZenSoftdojoBundle:Altas/Modulos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Altas\Modulos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Modulos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('abm_modulos_show', array('id' => $entity->getId())));
        }

        return $this->render('ZenSoftdojoBundle:Altas/Modulos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Altas\Modulos entity.
    *
    * @param Modulos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Modulos $entity)
    {
        $form = $this->createForm(new ModulosType(), $entity, array(
            'action' => $this->generateUrl('abm_modulos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Altas\Modulos entity.
     *
     */
    public function newAction()
    {
        $entity = new Modulos();
        $form   = $this->createCreateForm($entity);

        return $this->render('ZenSoftdojoBundle:Altas/Modulos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Altas\Modulos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Modulos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Modulos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ZenSoftdojoBundle:Altas/Modulos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Altas\Modulos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Modulos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Modulos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ZenSoftdojoBundle:Altas/Modulos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Altas\Modulos entity.
    *
    * @param Modulos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Modulos $entity)
    {
        $form = $this->createForm(new ModulosType(), $entity, array(
            'action' => $this->generateUrl('abm_modulos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Altas\Modulos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Modulos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Modulos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('abm_modulos_edit', array('id' => $id)));
        }

        return $this->render('ZenSoftdojoBundle:Altas/Modulos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Altas\Modulos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Modulos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Altas\Modulos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('abm_modulos'));
    }

    /**
     * Creates a form to delete a Altas\Modulos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('abm_modulos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
