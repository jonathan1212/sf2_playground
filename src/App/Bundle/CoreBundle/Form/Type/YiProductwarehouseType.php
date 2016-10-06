<?php

namespace App\Bundle\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Type;
use Doctrine\ORM\EntityRepository;

use App\Bundle\CoreBundle\Form\Type\AppBaseFormType;
use App\Bundle\CoreBundle\Entity\YiProductwarehouse;

class YiProductwarehouseType extends AppBaseFormType
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
        //dump($builder);
        //exit;
        $builder
            /*->add('priority','checkbox', array(
                'required' => false,
            ))*/
            ->add('countryCode','choice', array(
                'choices' => YiProductwarehouse::getCode(),
                'required' => true,
            ))  
            ->add('dateAdded', 'datetime', array(
                'widget' => 'single_text',
                'required' => false,
                'format' => 'yyyy-MM-dd HH:mm:ss',
                'attr' => array(
                    'data-voucher-start-date' => '',
                    'class' => 'ui fluid input field start-date',
                    'placeholder' => 'Start Date'
                )
            ))
            //->add('logisticsId')
            //->add('isCod')
            ->add('handlingFee', 'number', array(
                'required' => false,
                'constraints' => array(
                    new Range(array(
                        'min' => 0,
                        'minMessage' => 'Handling fee must be equal or greater than 0'
                    ))
                ),
                'attr' => array(
                    'placeholder' => '0.00',
                ),
                'label' => 'Shipping Cost'
            ))
            ->add('userWarehouse','entity', array(
                'class' => 'App\Bundle\CoreBundle\Entity\YiUserwarehouse',
                'multiple' => false,
                'placeholder' => 'select',
                'required' => false,
                'property' => 'name',
                'label' => 'warehouse',
                'invalid_message' => 'Invalid Logistics',

                'constraints' => array(
                    new NotBlank(array(
                        "message" => "Cancellation reason is required"
                    )),
                    new NotNull(array(
                        "message" => "Cancellation reason is required"

                    )),
                )
            ))
            ->add('product', 'entity', array(
                'class' => 'App\Bundle\CoreBundle\Entity\YiProduct',
                'choice_label' => 'name',
                'placeholder' => 'select',
                'label' => 'Choose Name',
                'required' => false,
                'query_builder' => function(EntityRepository $er) {
                    $qb = $er->createQueryBuilder('p')
                             ->where('p.status = :status')
                             ->setParameter('status', 1);

                    return $qb;
                },
                
            ));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->addDefaultOptions([
            'status' => 1
        ]);

        $resolver->setDefaults(array(
            'data_class' => 'App\Bundle\CoreBundle\Entity\YiProductwarehouse',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'product_warehouse';
    }
}
