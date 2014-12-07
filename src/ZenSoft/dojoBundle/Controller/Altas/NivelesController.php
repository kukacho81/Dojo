<?php

namespace ZenSoft\dojoBundle\Controller\Altas;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use ZenSoft\dojoBundle\Entity\Altas\Niveles;
use ZenSoft\dojoBundle\Form\Altas\NivelesType;

/**
 * Altas\Niveles controller.
 *
 * @Route("/Altas/")
 */
class NivelesController extends Controller
{

    /**
     * Lists all Altas\Niveles entities.
     *
     * @Route("/", name="Altas_")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ZenSoftdojoBundle:Altas\Niveles')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Altas\Niveles entity.
     *
     * @Route("/", name="Altas__create")
     * @Method("POST")
     * @Template("ZenSoftdojoBundle:Altas\Niveles:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Niveles();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Altas__show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Altas\Niveles entity.
    *
    * @param Niveles $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Niveles $entity)
    {
        $form = $this->createForm(new NivelesType(), $entity, array(
            'action' => $this->generateUrl('Altas__create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Altas\Niveles entity.
     *
     * @Route("/new", name="Altas__new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Niveles();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Altas\Niveles entity.
     *
     * @Route("/{id}", name="Altas__show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Niveles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Niveles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Altas\Niveles entity.
     *
     * @Route("/{id}/edit", name="Altas__edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Niveles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Niveles entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Altas\Niveles entity.
    *
    * @param Niveles $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Niveles $entity)
    {
        $form = $this->createForm(new NivelesType(), $entity, array(
            'action' => $this->generateUrl('Altas__update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Altas\Niveles entity.
     *
     * @Route("/{id}", name="Altas__update")
     * @Method("PUT")
     * @Template("ZenSoftdojoBundle:Altas\Niveles:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Niveles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Altas\Niveles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('Altas__edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Altas\Niveles entity.
     *
     * @Route("/{id}", name="Altas__delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ZenSoftdojoBundle:Altas\Niveles')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Altas\Niveles entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Altas_'));
    }

    /**
     * Creates a form to delete a Altas\Niveles entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Altas__delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
