<?php

namespace App\Form;

use App\Entity\Permission;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PermissionType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $builder->add('description');
    $builder->add('attribute');
    $builder->add('subject');
    $builder->add('title');
    $builder->add('enabled');
    $builder->add('expression');
    $builder->add('groups');
    $builder->add('users');
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
    $resolver->setDefaults([
      'data_class' => Permission::class,
    ]);
  }
}
