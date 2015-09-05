<?php

namespace HospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpleadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text',array('max_length'=> 50))
            ->add('apellido','text',array('max_length' => 50))
            ->add('fechaNacimiento','date',array('widget'=>'single_text'))
            ->add('telefono','text',array('max_length'=>10))
            ->add('direccion','text',array('max_length'=>45))
            ->add('idCargo','entity',array(
                'class'=>'HospitalBundle\Entity\Cargo',
                'required' => true,
                'placeholder' => 'Selecciona un Cargo',
                'property' => 'nombre')
            )
            ->add('idTipoEmpleado','entity',array(
                'class'=>'HospitalBundle\Entity\TipoEmpleado',
                'required'=>true,
                'placeholder'=>'Seleciona un Tipo de Empleado',
                'property' => 'nombre')
            )
            ->add('idDependencia','entity',array(
                'class'=>'HospitalBundle\Entity\Dependencia',
                'required'=>true,
                'placeholder'=> 'Seleciones una Dependencia',
                'property'=>'nombre')
            )
            ->add('username','text',array('max_length' => 15))
            ->add('password','password',array(
                  'required' => true,
                  'max_length' => 8)
                )
        ;
    }   
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HospitalBundle\Entity\Empleado'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hospitalbundle_empleado';
    }
}
