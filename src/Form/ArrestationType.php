<?php

namespace App\Form;

use App\Entity\Arrestation;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArrestationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('identiteEmetteur', TextType::class, [
                'attr' => [
                    'placeholder' => '06'
                ]
            ])
            ->add('identiteAttache', TextType::class, [
                'attr' => [
                    'placeholder' => '02 - 04'
                ]
            ])
            ->add('dateHeure', TextType::class, [
                'attr' => [
                    'placeholder' => '11/08/2021 16h05'
                ]
            ])
            ->add('nomSuspect', TextType::class, [
                'attr' => [
                    'placeholder' => 'Diabate'
                ]
            ])
            ->add('prenomSuspect', TextType::class, [
                'attr' => [
                    'placeholder' => 'Koffi'
                ]
            ])
            ->add('dateNaissanceSuspect', TextType::class, [
                'attr' => [
                    'placeholder' => '10/02/1990'
                ]
            ])
            ->add('numeroSuspect', TextType::class, [
                'attr' => [
                    'placeholder' => '555 239'
                ]
            ])
            ->add('description', TextType::class, [
                'attr' => [
                    'placeholder' => ' Lors de notre patrouille composée de …, nous intervenons sur … (Expliquer l’intervention)'
                ]
            ])
            ->add('permisConduire', ChoiceType::class, [
                'choices' => [
                    'Oui' => 1,
                    'Non' => 2,
                    'Non Controlé' =>3
                ]
            ])
            ->add('permisPpa', ChoiceType::class, [
                'choices' => [
                    'Oui' => 1,
                    'Non' => 2,
                    'Non Controlé' =>3
                ]
            ])
            ->add('heureDroit', TextType::class, [
                'attr' => [
                    'placeholder' => '16h16'
                ]
            ])
            ->add('recidiviste', CheckboxType::class)
            ->add('cooperation', ChoiceType::class, [
                'choices' => [
                    'Oui' => 1,
                    'Non' => 2,
                    'Mitigé' => 3
                ]
            ])
            ->add('photoFouilleUn', FileType::class)
            ->add('photoFouilleDeux', FileType::class)
            ->add('fairReproche', FileType::class)
            ->add('carteIdentite', FileType::class)
            ->add('permisConduireImg', FileType::class)
            ->add('permisPpaImg', FileType::class)
            ->add('suspectFace', FileType::class)
            ->add('suspectDos', FileType::class)
            ->add('suspectProfilUn', FileType::class)
            ->add('suspectProfilDeux', FileType::class)
            ->add('photoVehiculeUn', FileType::class)
            ->add('photoVehiculeDeux', FileType::class)
            ->add('photoPlaque', FileType::class)
            ->add('submit', SubmitType::class, [
                'label' => "Enregistrer",
                'attr' => [
                    'class'=> 'btn-info btn-block mt-3'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Arrestation::class,
        ]);
    }
}
