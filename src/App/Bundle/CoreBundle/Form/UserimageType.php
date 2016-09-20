<?php

namespace App\Bundle\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserimageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userId')
            ->add('imageLocation')
            ->add('isHidden')
            ->add('dateAdded')
            ->add('userImageType')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Bundle\CoreBundle\Entity\Userimage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_bundle_corebundle_userimage';
    }
}
