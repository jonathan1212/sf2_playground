<?php

namespace App\Bundle\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('password')
            ->add('email')
            ->add('contactNumber')
            ->add('dateAdded')
            ->add('dateLastModified')
            ->add('isActive')
            ->add('isMobileVerified')
            ->add('isEmailVerified')
            ->add('loginCount')
            ->add('gender')
            ->add('birthdate')
            ->add('lastLoginDate')
            ->add('lastLogoutDate')
            ->add('lastLoginIp')
            ->add('lastFailedLoginDate')
            ->add('failedLoginCount')
            ->add('nickname')
            ->add('slug')
            ->add('isBanned')
            ->add('lockDuration')
            ->add('banTypeId')
            ->add('userType')
            ->add('forgotPasswordToken')
            ->add('forgotPasswordTokenExpiration')
            ->add('forgotPasswordCode')
            ->add('forgotPasswordCodeExpiration')
            ->add('referralCode')
            ->add('firstName')
            ->add('lastName')
            ->add('slugChanged')
            ->add('reactivationcode')
            ->add('accountId')
            ->add('tin')
            ->add('isSocialMedia')
            ->add('registrationType')
            ->add('consecutiveLoginCount')
            ->add('primaryCoverPhoto')
            ->add('primaryImage')
            ->add('country')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Bundle\CoreBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_bundle_corebundle_user';
    }
}
