<?php

namespace ZenSoft\dojoBundle\Controller\Altas;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ZenSoft\dojoBundle\Entity\Altas\TiposDocumento;
use ZenSoft\dojoBundle\Form\Altas\TiposDocumentoType;

/**
 * Altas\TiposDocumento controller.
 *
 */
class TiposDocumentoController extends Controller
{

    /**
     * Lists all Altas\TiposDocumento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ZenSoftdojoBundle:Altas\TiposDocumento')->findAll();

        return $this->render('ZenSoftdojoBundle:Altas/TiposDocumento:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Altas\TiposDocumento entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TiposDocumento();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('altas_tiposdocumento_show', array('id' => $entity->getId())));
        }

        return $this->render('ZenSoftdojoBundle:Altas/TiposDocumento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Altas\TiposDocumento entity.
    *
    * @param TiposDocumento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(TiposDocumento $entity)
    {
        $form = $this->createForm(new TiposDocumentoType(), $entity, array(
            'action' => $this->generateUrl('altas_tiposdocumento_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Altas\TiposDocumento entity.
     *
     */
    public function newAction()
    {
        $entity = new TiposDocumento();
        $form   = $this->createCreateForm($entity);

        return $this->render('ZenSoftdojoBundle:Altas/TiposDocumento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Altas\TiposDocumento entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\TiposDocumento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\TiposDocumento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ZenSoftdojoBundle:Altas/TiposDocumento:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Altas\TiposDocumento entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\TiposDocumento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\TiposDocumento entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ZenSoftdojoBundle:Altas/TiposDocumento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Altas\TiposDocumento entity.
    *
    * @param TiposDocumento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TiposDocumento $entity)
    {
        $form = $this->createForm(new TiposDocumentoType(), $entity, array(
            'action' => $this->generateUrl('altas_tiposdocumento_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Altas\TiposDocumento entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\TiposDocumento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\TiposDocumento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('altas_tiposdocumento_edit', array('id' => $id)));
        }

        return $this->render('ZenSoftdojoBundle:Altas/TiposDocumento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Altas\TiposDocumento entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ZenSoftdojoBundle:Altas\TiposDocumento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Altas\TiposDocumento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('altas_tiposdocumento'));
    }

    /**
     * Creates a form to delete a Altas\TiposDocumento entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('altas_tiposdocumento_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
