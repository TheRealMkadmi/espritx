<?php

namespace App\Form;

use App\Entity\ConversationThread;
use App\Entity\Messages;
use http\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MessagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('content')
            ->add('Relat',
                EntityType::class,
                ['class'=>ConversationThread::class,
                    'choice_label'=>'user1',
                    'placeholder'=>'Sélectionner le chat'])
            ->add('
            ',SubmitType::class)
            ->add('Ajouter',SubmitType::class)
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Messages::class,
        ]);
    }
}
