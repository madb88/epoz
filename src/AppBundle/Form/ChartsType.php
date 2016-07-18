<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChartsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description', 'textarea', array(
                    'attr' => array(
                    'placeholder' => 'Location / Description',
                    )))
            ->add('medicines','textarea', array(
                    'attr' => array(
                    'placeholder' => 'What medicines you could give',
                    )))
            ->add('warning')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Charts'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_charts';
    }
}
