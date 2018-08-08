<?php
/**
 * Created by PhpStorm.
 * User: yoi
 * Date: 08/08/2018
 * Time: 12:24
 */

namespace My\TechnosBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ForgotPasswordType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('password',  RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'security.mismatched.passwords',
                'first_options' => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeter le password'],
            ])
            ->add('reset', SubmitType::class, ['label' => 'security.reset.password'])
        ;

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\TechnosBlogBundle\Entity\Users'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'my_technosblogbundle_users';
    }


}