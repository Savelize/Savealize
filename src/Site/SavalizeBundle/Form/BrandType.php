<?php

namespace Site\SavalizeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BrandType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('confirmed')
            ->add('isDeleted')
            ->add('product')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\SavalizeBundle\Entity\Brand'
        ));
    }

    public function getName()
    {
        return 'site_savalizebundle_brandtype';
    }
}
