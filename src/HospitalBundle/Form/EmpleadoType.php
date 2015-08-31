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
            ->add('idPersona')
            ->add('idCargo','entity',array(
                'class'=>'Hospital\HospitalBundle\Entity\Cargo',
                'required' => true,
                'placeholder' => 'Selecciona un Cargo',
                'property' => 'nombre')
            )
            ->add('idTipoEmpleado','entity',array(
                'class'=>'Hospital\HospitalBundle\Entity\TipoEmpleado',
                'required'=>true,
                'placeholder'=>'Seleciona un Tipo de Empleado',
                'property' => 'nombre')
            )
            ->add('idDependencia','entity',array(
                'class'=>'Hospital\HospitalBundle\Entity\Dependencia',
                'required'=>true,
                'placeholder'=> 'Seleciones una Dependencia',
                'property'=>'nombre')
            )
            ->add('idUsuario')
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
