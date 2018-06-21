<?php

namespace App\Form;

use App\Entity\AppUsers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class SignupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'Prenom',
            ))
            ->add('lastname', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'Nom',
            ))
            ->add('username', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'Pseudo',
            ))
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array('label' => 'Mot de passe', 'attr' => array('class' => 'form-control')),
                'second_options' => array('label' => 'Confirmez votre mot de passe', 'attr' => array('class' => 'form-control')),         
            ))
            ->add('mail', EmailType::class, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'Adresse Mail',
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Enregistrer',
                'attr' => array('class' => 'btn btn-action btnLigtht'),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AppUsers::class,
        ]);
    }
}
