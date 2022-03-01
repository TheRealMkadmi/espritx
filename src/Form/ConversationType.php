<?php

namespace App\Form;

use App\Entity\ConversationThread;
use App\Form\AbstractBootstrapType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class ConversationType extends AbstractBootstrapType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $options=array_merge($options,[
            'csrf_protection'=>false,
        ]);
        $this->addSimpleTextInput($builder,'user1','user1','user1')
            ->addSimpleTextInput($builder,'user2','user2','user2')
            ->addSimpleTextInput($builder,'email','email','email')
            ->addSimpleTextInput($builder,'email2','email2','email2')
            ->addSwitchInput($builder,'Chateph')
            ->addButton($builder, "save")
            ->addButton($builder, "reset", "btn-outline-secondary", ResetType::class)
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ConversationThread::class,
        ]);
    }
}
