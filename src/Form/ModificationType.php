<?php

namespace App\Form;

use App\Entity\AppUsers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ModificationType extends AbstractType
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
            ->add('mail', EmailType::class, array(
                'attr' => array('class' => 'form-control'),
                'label' => 'Adresse mail',
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
            'data_class' => AppUsers::class,
        ]);
    }
}
