<?php

namespace App\Form;

use App\Entity\Group;
use App\Entity\Permission;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PermissionType extends AbstractBootstrapType
{
  public function buildForm(FormBuilderInterface $builder, array $options): void
  {
    $this
      ->addFeatherIconInputGroup ($builder, "title", "airplay", "Title")
      ->addFloatingLabelTextInput($builder, "description", "Description")
      ->addFloatingLabelTextInput($builder, 'subject', 'Subject Entity')
      ->addFloatingLabelTextInput($builder, 'attribute', 'Controlled operation')
      ->addFloatingLabelTextInput($builder, 'expression', 'Control expression (if needed)')
      ->addSelect2EntityField($builder, 'groups', Group::class, "display_name", 'ajax_autocomplete_groups')
      ->addSelect2EntityField($builder, 'users', User::class, "email", 'ajax_autocomplete_users')
      ->addSwitchInput($builder, "enabled")
      ->addButton($builder, "save")
      ->addButton($builder, "reset", "btn-outline-secondary", ResetType::class);
  }

  public function configureOptions(OptionsResolver $resolver): void
  {
    $resolver->setDefaults([
      'data_class' => Permission::class,
    ]);
  }
}
