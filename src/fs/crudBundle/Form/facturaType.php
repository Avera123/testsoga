<?php

namespace fs\crudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class facturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codefac')
            ->add('idtercero')
            ->add('fechafac')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fs\crudBundle\Entity\factura'
        ));
    }

    public function getName()
    {
        return 'fs_crudbundle_facturatype';
    }
}
