<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\Address;
use AppBundle\Form\AddressType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AddressController extends Controller
{


    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $addresses = $em->getRepository('AppBundle:Address')->findAll();

        return $this->render('address/index.html.twig', array(
            'addresses' => $addresses,
        ));
    }


    public function newAction(Request $request)
    {
        $address = new Address();
        $form = $this->createForm('AppBundle\Form\AddressType', $address);
        /* Adaug aici butonul de submit */
        $form->add('submit', SubmitType::class, ['label'=>'Trimite', 'attr'=>['class'=>'btn btn-primary']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($address);
            $em->flush();

            return $this->redirectToRoute('address_show', array('id' => $address->getId()));
        }

        return $this->render('address/new.html.twig', array(
            'address' => $address,
            'form' => $form->createView(),
        ));
    }


    public function showAction(Address $address)
    {
        $deleteForm = $this->createDeleteForm($address);

        return $this->render('address/show.html.twig', array(
            'address' => $address,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    public function editAction(Request $request, Address $address)
    {
        $deleteForm = $this->createDeleteForm($address);
        $editForm = $this->createForm('AppBundle\Form\AddressType', $address);
        /* Adaug aici butonul de submit */
        $form->add('submit', SubmitType::class, ['label'=>'Trimite', 'attr'=>['class'=>'btn btn-primary']]);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($address);
            $em->flush();

            return $this->redirectToRoute('address_edit', array('id' => $address->getId()));
        }

        return $this->render('address/edit.html.twig', array(
            'address' => $address,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    public function deleteAction(Request $request, Address $address)
    {
        $form = $this->createDeleteForm($address);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($address);
            $em->flush();
        }

        return $this->redirectToRoute('address_index');
    }

    /**
     * Creates a form to delete a Address entity.
     *
     * @param Address $address The Address entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Address $address)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('address_delete', array('id' => $address->getId())))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, ['label'=>'Trimite', 'attr'=>['class'=>'btn btn-primary']])
            ->getForm()
        ;
    }
}
