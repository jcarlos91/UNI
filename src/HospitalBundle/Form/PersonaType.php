<?php

namespace HospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cedula','text',array('max_length'=>12))
            ->add('nombre','text',array('max_length'=>45))
            ->add('apellidos','text',array('max_length'=>45))
            ->add('fechaNacimiento','date',array('widget'=>'single_text'))
            ->add('telefono','text',array('max_length'=>10))
            ->add('direccion','text',array('max_length'=>45))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HospitalBundle\Entity\Persona'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hospitalbundle_persona';
    }
}
