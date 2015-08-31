<?php

namespace HospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExamenType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idHistorialClinica')
            ->add('fechaSolicitud','date',array('widget'=>'single_text'))
            ->add('fechaAplicacion','date',array('widget'=>'single_text'))
            ->add('observaciones','text',array('max_length'=>45))
            ->add('idTipoExamen')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HospitalBundle\Entity\Examen'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hospitalbundle_examen';
    }
}
