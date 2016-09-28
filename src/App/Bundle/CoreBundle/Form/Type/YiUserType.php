<?php

namespace App\Bundle\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use App\Bundle\CoreBundle\Form\Validator\Constraints\ValidSlug;
use App\Bundle\CoreBundle\Form\Validator\Constraints\UniqueEmail;
use App\Bundle\CoreBundle\Entity\YiUser;


class YiUserType extends AbstractType
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
        $passwordConstraint =  array(
                new NotBlank(array(
                    "message" => "Password field is required"
                )),
                new NotNull(array(
                    "message" => "Password field is required"
                )),
                new Length(array(
                    'min' => 3,
                    'minMessage' => 'Password must be atleast {{ limit }} characters',
                    'max' => 25,
                    'maxMessage' => 'Password can only be up to {{ limit }} characters',
                )),
                //new YilinkerPassword(),
            );

        $builder
            ->add('password', 'repeated', array(
                    'label' => 'Password',
                    'type' => 'password',
                    'invalid_message' => 'Passwords do not match',
                    'first_options' => array('label' => 'Password'),
                    'second_options' => array('label' => 'Confirm Password'),
                    'constraints' => $passwordConstraint,
                ))

            ->add('email','email', array(
                'constraints' => array(
                    new Email(array(
                        "message" => "Email Address is not valid"
                    )),

                    new UniqueEmail(array(
                        "message" => "email already taken",
                        "excludeUserId" => $options['excludedId']
                    )),

                )))

            ->add('contactNumber', 'text', array(
                    'constraints' => array(
                        new NotBlank(array(
                            "message" => "Contact No is required"
                        )),
                        new NotNull(array(
                            "message" => "Contact No is required"
                        )),
                        new Length(array(
                            'min' => 5,
                            'max' => 20,
                            'minMessage' => 'Contact number must be atleast {{ limit }} characters',
                            'maxMessage' => 'Contact number can only be up to {{ limit }} characters',
                        )),
                    )
                ))
            
            ->add('dateAdded', 'datetime', array(
                'widget' => 'single_text',
                'required' => false,
                'format' => 'yyyy-MM-dd HH:mm:ss',
                'attr' => array(
                    'data-voucher-start-date' => '',
                    'class' => 'ui fluid input field start-date',
                    'placeholder' => 'Start Date'
                ),
                'constraints' => array(
                    new NotBlank(array(
                        "message" => "Pickup schedule must be set",
                    )),
                    new GreaterThanOrEqual("now"),
                ),
            ))

            ->add('isActive','checkbox', array(
                'required' => false
            ))

            ->add('dateLastModified', 'datetime', array(
                'widget' => 'single_text',
                'required' => false,
                'format' => 'yyyy-MM-dd HH:mm:ss',
                'attr' => array(
                    'data-voucher-start-date' => '',
                    'class' => 'ui fluid input field start-date',
                    'placeholder' => 'Start Date'
                )
            ))

            ->add('firstName', 'text')

            ->add('slug', 'text', array(
                'constraints' => array(
                    new Length(array(
                        'max' => 45,
                        'maxMessage' => 'Slug can only be up to {{ limit }} characters',
                    )),
                    new ValidSlug(),
                    //new UniqueBuyerSlug()
                )
            ))

            ->add('userType' , 'choice', array(
                'choices' => array(YiUser::USER_TYPE_BUYER => 'Buyer', YiUser::USER_TYPE_SELLER => 'Seller', YiUser::USER_TYPE_GUEST => 'Guest' ),
                'required' => false,
            ))

            /*->add('primaryImageId')
            
            
            ->add('isMobileVerified','checkbox')
            ->add('isEmailVerified','checkbox')
            ->add('loginCount')
            ->add('gender')
            ->add('birthdate')
            ->add('lastLoginDate')
            ->add('lastLogoutDate')
            ->add('lastLoginIp')
            ->add('lastFailedLoginDate')
            ->add('failedLoginCount')
            ->add('nickname')
            ->add('isBanned', 'checkbox')
            ->add('lockDuration')
            ->add('banTypeId')
            
            ->add('forgotPasswordToken')
            ->add('forgotPasswordTokenExpiration')
            ->add('forgotPasswordCode')
            ->add('forgotPasswordCodeExpiration')
            ->add('referralCode')
            
            ->add('lastName')
            ->add('slugChanged', 'checkbox')
            ->add('primaryCoverPhotoId')
            ->add('reactivationcode')
            ->add('accountId')
            ->add('tin')
            ->add('isSocialMedia')
            ->add('registrationType')
            ->add('countryId')
            ->add('languageId')
            ->add('consecutiveLoginCount')
            ->add('resourceId')*/
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Bundle\CoreBundle\Entity\YiUser',
            //'allow_extra_fields' => true,
            'excludedId' => null,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'user_info';
    }
}
