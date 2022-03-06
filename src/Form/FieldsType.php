<?php

namespace App\Form;

use App\Entity\Fields;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FieldsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name',NULL,[
                'attr'=>[
                'placeholder'=>"Nom de champ",],
                'label'=>'Field Title',
            ])
            ->add('Type', ChoiceType::class, [
                'choices'  => [
                    'Text' => "TextType",
                    'Email' => "EmailType",
                    'Number' => "NumberType",
                    'Date' => "DateType",
                    'Date and Time' => "DateTimeType",
                    'Country'=>"CountryType",
                    'File' => "FileType",
                ],
                'expanded'=>false,
                'multiple'=>false,
                'placeholder'=>"Type de données",
            ])
            ->add('Requiry',CheckboxType::class,[
                    'required' => false,
                'label'=>"Required",
            ])
            ->add('Remove',SubmitType::class, [
                'label'=>"X",
                'attr'=>[
                    'class'=>'btn btn-outline-danger text-nowrap px-1 waves-effect',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fields::class,
        ]);
    }
}
