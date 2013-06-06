<?php

namespace Site\SavalizeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('username')
            ->add('password')
            ->add('email')
            ->add('telphone')
            ->add('country')
            ->add('city')
            ->add('region')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\SavalizeBundle\Entity\Company'
        ));
    }

    public function getName()
    {
        return 'site_savalizebundle_companytype';
    }
}
