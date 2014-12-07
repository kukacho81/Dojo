<?php

namespace ZenSoft\dojoBundle\Form\Altas;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EstablecimientosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('telefono')
            ->add('calle')
            ->add('altura')
            ->add('web')
            ->add('idLocalidades')
            ->add('logo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ZenSoft\dojoBundle\Entity\Altas\Establecimientos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zensoft_dojobundle_altas_establecimientos';
    }
}
