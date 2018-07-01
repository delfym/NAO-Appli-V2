<?php

namespace App\Form;

use App\Entity\Observation;
use App\Validator\Constraints\Bird;
//use Doctrine\DBAL\Types\FloatType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ObservationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('geo_longitude', NumberType::class, array(
                'attr' => array('class' => 'form-control', "readonly" => true),
                "label" => "Longitude",
            ))
            ->add('geo_latitude', NumberType::class, array(
                'attr' => array('class' => 'form-control', "readonly" => true),
                "label" => "Latitude",
            ))
            ->add('observation_title', TextType::class, array(
                'attr' => array('class' => 'form-control',),
                "label" => "Titre de l'observation",
            ))
            ->add('comment', TextType::class, array(
                "attr" => array('class' => 'form-control',),
                "label" => "Commentaire",
            ))
            ->add('post_date', DateType::class, array(
                "attr" => array('class' => 'form-control',"readonly" => true),
                'widget' => 'single_text',
                "label" => "Date de l'observation",
            ))
            ->add('autocomp_bird', TextType::class, array(
                "attr" => array('class' => 'form-control',),
                "mapped" => false,
                "label" => "Oiseau Observé",
                "constraints" => array(
                    new Bird(),
                ),
            )) // champ independant de l'entité "birds" ce qui nous permet de recuperer le champ pour le transformer en objet (...)
            ->add('file', FileType::class, array(
                'attr' => array('class' => 'form-control'),
                'label' => "Photo",
                'required' => false,
            ))
            ->add('save', SubmitType::class, array(
                'attr' => array('class' => 'btn btn-action btnLigtht',),
                'label'=> 'Valider',
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
