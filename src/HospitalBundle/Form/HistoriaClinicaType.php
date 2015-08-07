<?php

namespace HospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HistoriaClinicaType extends AbstractType
{

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HospitalBundle\Entity\HistoriaClinica'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hospitalbundle_historiaclinica';
    }
}
