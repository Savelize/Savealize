<?php

namespace Site\SavalizeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdminAccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('username')
            ->add('email')
            ->add('password')
            ->add('isDeleted')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\SavalizeBundle\Entity\AdminAccount'
        ));
    }

    public function getName()
    {
        return 'site_savalizebundle_adminaccounttype';
    }
}
