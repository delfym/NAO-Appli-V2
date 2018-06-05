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
            ->add('geographic_coordinates', TextType::class, array(
                'attr' => array('class' => 'form-control',),
            ))
            ->add('observation_title', TextType::class, array(
                'attr' => array('class' => 'form-control',),
            ))
            ->add('comment', TextType::class, array(
                "attr" => array('class' => 'form-control',),
            ))
            ->add('bird', TextType::class, array(
                'attr' => array('class' => 'form-control',),
            ))
            ->add('save', SubmitType::class, array(
                'attr' => array('class' => 'btn btn-action btnLigtht',),
                'label' => 'Enregistrer',
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
