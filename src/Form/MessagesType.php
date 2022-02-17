<?php

namespace App\Form;

use App\Entity\Messages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessagesType extends AbstractBootstrapType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->addSimpleTextInput($builder,'content','content','Type your message here')
            ->addFloatingLabelTextInput($builder,'Relat','Relat',"Test")

            ->addButton($builder, "save")
            ->addButton($builder, "reset", "btn-outline-secondary", ResetType::class)
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Messages::class,
        ]);
    }
}
