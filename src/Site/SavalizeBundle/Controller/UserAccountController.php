<?php

namespace Site\SavalizeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;
use Site\SavalizeBundle\Entity\UserAccount;
use Site\SavalizeBundle\Form\UserAccountType;

/**
 * UserAccount controller.
 *
 */
class UserAccountController extends Controller
{
    /**
     * Lists all UserAccount entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteSavalizeBundle:UserAccount')->findAll();

        return $this->render('SiteSavalizeBundle:UserAccount:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new UserAccount entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new UserAccount();
        $form = $this->createForm(new UserAccountType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('useraccount_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteSavalizeBundle:UserAccount:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new UserAccount entity.
     *
     */
    public function newAction()
    {
        $entity = new UserAccount();
        $form   = $this->createForm(new UserAccountType(), $entity);

        return $this->render('SiteSavalizeBundle:UserAccount:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a UserAccount entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteSavalizeBundle:UserAccount')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UserAccount entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteSavalizeBundle:UserAccount:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing UserAccount entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteSavalizeBundle:UserAccount')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UserAccount entity.');
        }

        $editForm = $this->createForm(new UserAccountType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteSavalizeBundle:UserAccount:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing UserAccount entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteSavalizeBundle:UserAccount')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find UserAccount entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UserAccountType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('useraccount_edit', array('id' => $id)));
        }

        return $this->render('SiteSavalizeBundle:UserAccount:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a UserAccount entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteSavalizeBundle:UserAccount')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find UserAccount entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('useraccount'));
    }

    /**
     * Creates a form to delete a UserAccount entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    /*user history page 4*/
    public function usrhistoryAction(){
        $id = 1;
        $em = $this->getDoctrine()->getEntityManager();
        $usrhistory = $em->getRepository('SiteSavalizeBundle:History')->findAll();
        return $this->render('SiteSavalizeBundle:UserAccount:page4.html.twig', array('usrhistory' => $usrhistory));
    }
    
    public function contactAction() {
        //get the request object
        $request = $this->getRequest();
        $collectionConstraint = new Collection(array(
            'name' => new NotBlank(),
            'email' => array(new Email(), new NotBlank()),
            'subject' => array(),
            'message' => new NotBlank()
        ));
        $data = array();
        $data['subject'] = 'Contact For Support';
        //create the form
        $formBuilder = $this->createFormBuilder($data, array(
                    'validation_constraint' => $collectionConstraint,
                ))
                ->add('name')
                ->add('subject', null, array('required' => false))
                ->add('email', 'email', array('attr' => array('class' => 'email')))
                ->add('message', 'textarea',array('attr' => array('rows' => '10','cols' => '50')))
        ;
        $form = $formBuilder->getForm();
        //check if this is the user posted his data
        if ($request->getMethod() == 'POST') {
            //fill the form data from the request
            $form->bindRequest($request);
            //check if the form values are correct
            if ($form->isValid()) {
                $data = $form->getData();
                //return $this->redirect($this->generateUrl('contact_success',array('name' => $data['name'])));
                return $this->render('SiteSavalizeBundle:UserAccount:msgToUser.html.twig', array('msg' =>"Thank u ".$data['name']." for contacting us"));
            }
        }
        return $this->render('SiteSavalizeBundle:UserAccount:contact.html.twig', array('form' => $form->createView()));
    }
    
    /* user personal settings*/
    public function personalusersettingsAction(){
        //$request = $this->getRequest();
        $collectionConstraint = new Collection(array(
            'First_Name' => new NotBlank(),
            'Last_Name' => new NotBlank(),
            'Username' => new NotBlank(),
            'Password' => new NotBlank(),
            'Confirm_password' => new NotBlank(),
            'Email' => array(new Email(), new NotBlank()),
            'Country' => new NotBlank(),
            'City' => new NotBlank(),
            'Region' => new NotBlank(),
            'Age' => new NotBlank(),
            'Salary' => new NotBlank()
        ));
        $data = array();
        $formBuilder = $this->createFormBuilder($data, array(
                    'validation_constraint' => $collectionConstraint,
                ))
                ->add('First_Name')
                ->add('Last_Name')
                ->add('Username')
                ->add('Password', 'password')
                ->add('Confirm_password', 'password')
                ->add('Email', 'email', array('attr' => array('class' => 'email')))
                ->add('Country')
                ->add('City')
                ->add('Region')
                ->add('Age')
                ->add('Salary')
        ;
        $form = $formBuilder->getForm();
        return $this->render('SiteSavalizeBundle:UserAccount:personalusersettings.html.twig', array('form' => $form->createView()));
    }
    
    /* user add/remove category setting*/
    public function categoryusersettingsAction(){
        $catarr = array(
            '1'=>'food',
            '2'=>'cloth',
            '3'=>'services',
            '4'=>'car',
            '5'=>'drinks',
            '6'=>'transportation',
            '7'=>'accomidation',
            '8'=>'devices',
            '9'=>'baby',
            '10'=>'other',
            '11'=>'food',
            '12'=>'cloth',
            '13'=>'services',
            '14'=>'car',
            '15'=>'drinks',
            '16'=>'food',
            '17'=>'cloth',
            '18'=>'services',
            '19'=>'car',
            '20'=>'drinks',
            '21'=>'food',
            '22'=>'cloth',
            '23'=>'services',
            '24'=>'car',
            '25'=>'drinks',
        );
        return $this->render('SiteSavalizeBundle:UserAccount:categoryusersettings.html.twig', array('categories' => $catarr));
    }
}
