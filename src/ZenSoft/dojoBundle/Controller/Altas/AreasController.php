<?php

namespace ZenSoft\dojoBundle\Controller\Altas;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ZenSoft\dojoBundle\Entity\Altas\Areas;
use ZenSoft\dojoBundle\Form\Altas\AreasType;

/**
 * Altas\Areas controller.
 *
 */
class AreasController extends Controller
{

    /**
     * Lists all Altas\Areas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ZenSoftdojoBundle:Altas\Areas')->findAll();

        return $this->render('ZenSoftdojoBundle:Altas/Areas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Altas\Areas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Areas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('abm_areas_show', array('id' => $entity->getId())));
        }

        return $this->render('ZenSoftdojoBundle:Altas/Areas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Altas\Areas entity.
    *
    * @param Areas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Areas $entity)
    {
        $form = $this->createForm(new AreasType(), $entity, array(
            'action' => $this->generateUrl('abm_areas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Altas\Areas entity.
     *
     */
    public function newAction()
    {
        $entity = new Areas();
        $form   = $this->createCreateForm($entity);

        return $this->render('ZenSoftdojoBundle:Altas/Areas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Altas\Areas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Areas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Areas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ZenSoftdojoBundle:Altas/Areas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Altas\Areas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Areas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Areas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ZenSoftdojoBundle:Altas/Areas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Altas\Areas entity.
    *
    * @param Areas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Areas $entity)
    {
        $form = $this->createForm(new AreasType(), $entity, array(
            'action' => $this->generateUrl('abm_areas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Altas\Areas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Areas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Areas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('abm_areas_edit', array('id' => $id)));
        }

        return $this->render('ZenSoftdojoBundle:Altas/Areas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Altas\Areas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Areas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Altas\Areas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('abm_areas'));
    }

    /**
     * Creates a form to delete a Altas\Areas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('abm_areas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
