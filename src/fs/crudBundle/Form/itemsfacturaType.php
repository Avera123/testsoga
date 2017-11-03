<?php

namespace fs\crudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class itemsfacturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idfact')
            ->add('code')
            ->add('name')
            ->add('cantidad')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fs\crudBundle\Entity\itemsfactura'
        ));
    }

    public function getName()
    {
        return 'fs_crudbundle_itemsfacturatype';
    }
}
