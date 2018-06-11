<?php

namespace App\Form;

use App\Entity\Observation;
use App\Validator\Constraints\Bird;
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
                "label" => "Coordonnés Geographique"
            ))
            ->add('observation_title', TextType::class, array(
                'attr' => array('class' => 'form-control',),
                "label" => "Titre de l'observation",
            ))
            ->add('comment', TextType::class, array(
                "attr" => array('class' => 'form-control',),
                "label" => "Commentaire",
            ))
            /*->add('bird', TextType::class, array(
                'attr' => array('class' => 'form-control',),
            ))*/
            ->add('autocomp_bird', TextType::class, array(
                "attr" => array('class' => 'form-control',),
                "mapped" => false,
                "label" => "Oiseau Observé",
                "constraints" => array(
                    new Bird(),
                ),
            )) // champ independant de l'entité "birds" ce qui nous permet de recuperer le champ pour le transformer en objet (...)
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
