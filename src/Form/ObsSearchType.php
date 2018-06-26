<?php

namespace App\Form;

use App\Entity\Birds;
use App\Entity\Observation;
use App\Validator\Constraints\Bird;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ObsSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Birds::class,
        ]);
    }
}
