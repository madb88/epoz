<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Charts;
use AppBundle\Form\ChartsType;

/**
 * Charts controller.
 *
 * @Route("/charts")
 */
class ChartsController extends Controller
{

    /**
     * Lists all Charts entities.
     *
     * @Route("/", name="charts")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Charts')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Charts entity.
     *
     * @Route("/", name="charts_create")
     * @Method("POST")
     * @Template("AppBundle:Charts:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Charts();
        $user = $this->getUser();
        $user->addChart($entity);
        $entity->setUser($user);
        $entity->setCreationDate(new \DateTime());       
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('charts_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Charts entity.
     *
     * @param Charts $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Charts $entity)
    {
        $form = $this->createForm(new ChartsType(), $entity, array(
            'action' => $this->generateUrl('charts_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Charts entity.
     *
     * @Route("/new", name="charts_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Charts();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Charts entity.
     *
     * @Route("/{id}", name="charts_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Charts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Charts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Charts entity.
     *
     * @Route("/{id}/edit", name="charts_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Charts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Charts entity.');
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
    * Creates a form to edit a Charts entity.
    *
    * @param Charts $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Charts $entity)
    {
        $form = $this->createForm(new ChartsType(), $entity, array(
            'action' => $this->generateUrl('charts_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Charts entity.
     *
     * @Route("/{id}", name="charts_update")
     * @Method("PUT")
     * @Template("AppBundle:Charts:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Charts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Charts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('charts_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Charts entity.
     *
     * @Route("/{id}", name="charts_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Charts')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Charts entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('charts'));
    }

    /**
     * Creates a form to delete a Charts entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('charts_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

}
