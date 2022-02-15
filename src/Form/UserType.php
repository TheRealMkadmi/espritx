<?php

namespace App\Form;

use App\Entity\User;
use App\Enum\UserStatus;
use Elao\Enum\Bridge\Symfony\Form\Type\EnumType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $builder
      ->add('first_name')
      ->add('last_name')
      ->add('email')
      ->add('password')
      ->add('groups')
      ->add('individualPermissions')
      ->add('userStatus', EnumType::class, [
        'enum_class' => UserStatus::class,
      ])
      ->add('last_login')
      ->add('lastActivityAt')
      ->add('createdAt')
      ->add('updatedAt');
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
    $resolver->setDefaults([
      'data_class' => User::class,
    ]);
  }
}
