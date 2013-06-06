<?php

namespace Site\SavalizeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SubCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('confirmed')
            ->add('isDeleted')
            ->add('category')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\SavalizeBundle\Entity\SubCategory'
        ));
    }

    public function getName()
    {
        return 'site_savalizebundle_subcategorytype';
    }
}
