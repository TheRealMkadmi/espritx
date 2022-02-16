<?php

namespace App\Form;

use App\Entity\FormFields;
use App\Entity\Group;
use App\Entity\Service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ServiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name')
            ->add('Responsible',
                EntityType::class,
                ['class' => Group::class,
                    'choice_label' => 'display_name',
                    'placeholder' => 'Sélectionner le départment responsable'])
            ->add('Recipient',
                EntityType::class,
                ['class' => Group::class,
                    'choice_label' => 'display_name',
                    'expanded' => true,
                    'multiple' => true])
            ->add('Ajouter', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Service::class,
        ]);
    }
}
