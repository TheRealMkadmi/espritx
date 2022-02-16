<?php

namespace App\Form;

use App\Entity\Permission;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PermissionType extends AbstractBootstrapType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $this
      ->addFeatherIconInputGroup($builder, "title", "airplay", "Title")
      ->addFloatingLabelTextInput($builder, "description", "Description")
      ->addFloatingLabelTextInput($builder, 'subject', 'Subject Entity')
      ->addFloatingLabelTextInput($builder, 'attribute', 'Controlled operation')
      ->addFloatingLabelTextInput($builder, 'expression', 'Control expression (if needed)')
      ->addSwitchInput($builder, "enabled")
      ->addButton($builder, "save")
      ->addButton($builder, "reset", "btn-outline-secondary", ResetType::class);

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
