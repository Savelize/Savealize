<?php

namespace Site\SavalizeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserAccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fname')
            ->add('lname')
            ->add('username')
            ->add('password')
            ->add('email')
            ->add('country')
            ->add('city')
            ->add('region')
            ->add('age')
            ->add('martalStatus')
            ->add('car')
            ->add('salary')
            ->add('linkedTo')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\SavalizeBundle\Entity\UserAccount'
        ));
    }

    public function getName()
    {
        return 'site_savalizebundle_useraccounttype';
    }
}
