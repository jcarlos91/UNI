<?php

namespace HospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TratamientoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idHistoriaClinica')
            ->add('idTipoTratamiento')
            ->add('fechaSolicitud','date',array('widget'=>'single_text'))
            ->add('fechaInicio','date',array('widget'=>'single_text'))
            ->add('fechaFinalizacion','date',array('widget'=>'single_text'))
            ->add('observaciones','text',array('max_length'=>45))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HospitalBundle\Entity\Tratamiento'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hospitalbundle_tratamiento';
    }
}
