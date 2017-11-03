<?php

namespace fs\crudBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use fs\crudBundle\Entity\itemsfactura;
use fs\crudBundle\Form\itemsfacturaType;

/**
 * itemsfactura controller.
 *
 * @Route("/itemsfactura")
 */
class itemsfacturaController extends Controller
{

    /**
     * Lists all itemsfactura entities.
     *
     * @Route("/", name="itemsfactura")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('fscrudBundle:itemsfactura')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new itemsfactura entity.
     *
     * @Route("/", name="itemsfactura_create")
     * @Method("POST")
     * @Template("fscrudBundle:itemsfactura:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new itemsfactura();
        $form = $this->createForm(new itemsfacturaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('itemsfactura_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new itemsfactura entity.
     *
     * @Route("/new", name="itemsfactura_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new itemsfactura();
        $form   = $this->createForm(new itemsfacturaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a itemsfactura entity.
     *
     * @Route("/{id}", name="itemsfactura_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fscrudBundle:itemsfactura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find itemsfactura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing itemsfactura entity.
     *
     * @Route("/{id}/edit", name="itemsfactura_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fscrudBundle:itemsfactura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find itemsfactura entity.');
        }

        $editForm = $this->createForm(new itemsfacturaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing itemsfactura entity.
     *
     * @Route("/{id}", name="itemsfactura_update")
     * @Method("PUT")
     * @Template("fscrudBundle:itemsfactura:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('fscrudBundle:itemsfactura')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find itemsfactura entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new itemsfacturaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('itemsfactura_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a itemsfactura entity.
     *
     * @Route("/{id}", name="itemsfactura_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('fscrudBundle:itemsfactura')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find itemsfactura entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('itemsfactura'));
    }

    /**
     * Creates a form to delete a itemsfactura entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
