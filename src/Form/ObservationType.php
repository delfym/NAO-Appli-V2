<?php

namespace App\Form;

use App\Entity\Observation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ObservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('geographic_coordinates', TextType::class)
            ->add('observation_title', TextType::class)
            ->add('comment', TextType::class)
            ->add('bird', TextType::class)
            ->add('save', SubmitType::class, array(
                'label' => 'Enregistrer'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Observation::class,
        ]);
    }
}
