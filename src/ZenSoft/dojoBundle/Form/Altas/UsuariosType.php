<?php

namespace ZenSoft\dojoBundle\Form\Altas;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuariosType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        
        $builder
            ->add('nombre')
            ->add('password')
            ->add('email')
            ->add('idTiposdocumento', 'entity', array('class'=>'ZenSoftdojoBundle:Altas\TiposDocumento'))    
            ->add('documento')
            ->add('imagen')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ZenSoft\dojoBundle\Entity\Altas\Usuarios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'zensoft_dojobundle_altas_usuarios';
    }
}
