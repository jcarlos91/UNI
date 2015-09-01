<?php

namespace HospitalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username','text')
            ->add('password','password',array(
                  'required' => true,
                  'max_length' => 8)
                )
            ->add('email','email',array(
                  'required' => true)
                )
            ->add('isActive','choice', [
                'choices'=>[
                    '1'=>'Sí',
                    '0'=>'No'
                ],
                'required' =>  true
            ])
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HospitalBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hospitalbundle_usuario';
    }
}
