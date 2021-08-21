<?php

namespace App\Form;

use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LeoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', ChoiceField::class,[
               'choices' => [
                   'Lincoln' => 1,
                   'Adam' => 2,
                   'Tango' =>3,
                   'X-ray'=>4,
                   "Henry"=>5,
                   "Mary"=>6,
                   "George"=>7,
                   "Zebra"=>8,
                   "William"=>9,
                   "David"=>10
               ]
            ])
            ->add('name', ChoiceField::class,[
                'choices' => [
                    '10-41 TS' => 1,
                    '10-41 Sud' => 2,
                    '10-41 Nord' =>3,
                    '10-06 EMS'=>4,
                    "10-06 PDP"=>5,
                    "10-06 Procédure"=>6,
                    "Signal 11"=>7,
                    "10-86"=>8
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
