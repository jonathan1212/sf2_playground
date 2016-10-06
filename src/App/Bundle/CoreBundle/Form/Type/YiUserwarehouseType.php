<?php

namespace App\Bundle\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use App\Bundle\CoreBundle\Form\Type\YiUserType;
use App\Bundle\CoreBundle\Form\Type\YiProductwarehouseType;

class YiUserwarehouseType extends AbstractType
{

    private $container;
    private $kernel = null;

    public function setContainer($container)
    {
        $this->container = $container;
    }

    public function setKernel($kernel)
    {
        $this->kernel = $kernel;
    }


    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('user', 'collection', array(
                'type' => new YiUserType,
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference'=> false
            ))

            ->add('name')

            ->add('yiProductwarehouses','collection', array(
                'type' => new YiProductwarehouseType,
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference'=> false
            ))

            
            /*->add('address')
            ->add('zipCode')
            ->add('dateAdded')
            ->add('dateLastModified')
            ->add('isDelete')
            ->add('user')
            ->add('location')*/
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Bundle\CoreBundle\Entity\YiUserwarehouse'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'user_warehouse';
    }
}
