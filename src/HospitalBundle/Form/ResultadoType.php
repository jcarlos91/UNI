<?php

namespace HospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResultadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idExamen')
            ->add('fechaEntrega','date',array('widget'=>'single_text'))
            ->add('descripcion','text',array('max_length'=>45))
            ->add('documentacionAsociado')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HospitalBundle\Entity\Resultado'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hospitalbundle_resultado';
    }
}
