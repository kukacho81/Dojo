<?php

namespace ZenSoft\dojoBundle\Controller\Altas;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ZenSoft\dojoBundle\Entity\Altas\Usuarios;
use ZenSoft\dojoBundle\Form\Altas\UsuariosType;

/**
 * Altas\Usuarios controller.
 *
 */
class UsuariosController extends Controller
{

    /**
     * Lists all Altas\Usuarios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ZenSoftdojoBundle:Altas\Usuarios')->findAll();

        return $this->render('ZenSoftdojoBundle:Altas/Usuarios:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Altas\Usuarios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Usuarios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('abm_usuarios_show', array('id' => $entity->getId())));
        }

        return $this->render('ZenSoftdojoBundle:Altas/Usuarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Altas\Usuarios entity.
    *
    * @param Usuarios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Usuarios $entity)
    {
        $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('abm_usuarios_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Altas\Usuarios entity.
     *
     */
    public function newAction()
    {
        $entity = new Usuarios();
        $form   = $this->createCreateForm($entity);

        return $this->render('ZenSoftdojoBundle:Altas/Usuarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Altas\Usuarios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Usuarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Usuarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ZenSoftdojoBundle:Altas/Usuarios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Altas\Usuarios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Usuarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Usuarios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ZenSoftdojoBundle:Altas/Usuarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Altas\Usuarios entity.
    *
    * @param Usuarios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Usuarios $entity)
    {
        $form = $this->createForm(new UsuariosType(), $entity, array(
            'action' => $this->generateUrl('abm_usuarios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Altas\Usuarios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Usuarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Usuarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('abm_usuarios_edit', array('id' => $id)));
        }

        return $this->render('ZenSoftdojoBundle:Altas/Usuarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Altas\Usuarios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Usuarios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Altas\Usuarios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('abm_usuarios'));
    }

    /**
     * Creates a form to delete a Altas\Usuarios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('abm_usuarios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
