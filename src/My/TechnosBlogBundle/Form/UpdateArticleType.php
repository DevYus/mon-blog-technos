<?php

namespace My\TechnosBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class UpdateArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('title', TextType::class, ['label' => 'Titre de l\'article', 'required' => false])
            ->add('author', TextType::class, ['label' => 'Auteur', 'required' => false])
             ->add('category', ChoiceType::class, [
                'label' => 'Catégorie', 
                'required' => false,
                'choices' => [                
                    'Php' => 'php',
                    'Javascript' => 'javascript',
                    'Rubis' => 'rubis',
                    'Vidéo' => 'vidéos',
                    'Sondages' => 'sondage',
                    'Tutoriels' => 'tutoriel'
                ],   
                'placeholder' => false, 
            ])
            ->add('date', DateType::class, [
                'label' => 'Date',
                'required' => false,
            ])
            ->add('pathImg', FileType::class, [
                'data_class' => null,
                'label' => 'Image à la une',
                'required' => false,
                'attr' => [ 'accept' => '.jpg, .jpeg, .png'],
            ])
            ->add('content', TextareaType::class, array(
                'attr' => array('class' => 'editor'),
                'label' => 'Contenu',
                'required' => true,

            ))
            ->add('submit', SubmitType::class, ['label' => 'VALIDER']);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\TechnosBlogBundle\Entity\Articles',
        ));
    }

    /**
     * @return null|string
     */
    public function getBlockPrefix()
    {
        return null;
    }


}
