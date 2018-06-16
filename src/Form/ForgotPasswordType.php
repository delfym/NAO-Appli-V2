<?php

namespace App\Form;

use App\Entity\ForgotPassword;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ForgotPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mail', EmailType::class, array(
                "attr" => array("class" => "form-control"),
                "label" => "Adresse mail"
            ))
            ->add('save', SubmitType::class, array(
                "attr" => array("class" => "btn btn-action"),
                'label' => 'Enregistrer'
            )) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ForgotPassword::class,
        ]);
    }
}
