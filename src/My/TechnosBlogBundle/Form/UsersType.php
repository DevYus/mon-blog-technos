<?php

namespace My\TechnosBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UsersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo',  TextType::class)
            ->add('username',  TextType::class)
            ->add('email',     EmailType::class)
            ->add('password',  RepeatedType::class, [
                 'type' => PasswordType::class,
                 'first_options' => ['label' => 'Password'],
                 'second_options' => ['label' => 'Repeter le password'],
            ]);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\TechnosBlogBundle\Entity\Users',
            'validation_groups' => array('registration'),
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
