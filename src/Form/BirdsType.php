<?php

namespace App\Form;

use App\Entity\Observation;
use App\Validator\Constraints\Bird;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BirdsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_de_reference', TextType::class, array(
                'attr' => array('class' => 'form-control', "readonly" => true),
                "label" => "Nom scientifique",
            ))
            ->add('synonymes_chresonymes', TextType::class, array(
                'attr' => array('class' => 'form-control', "readonly" => true),
                "label" => "Synonymes chresonymes",
            ))
            ->add('Regne', TextType::class, array(
                'attr' => array('class' => 'form-control',),
                "label" => "Règne",
            ))
            ->add('nom_verniculaire', TextType::class, array(
                "attr" => array('class' => 'form-control',),
                "label" => "Nom verniculaire",
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
