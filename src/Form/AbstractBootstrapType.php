<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ButtonTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButtonTypeInterface;

abstract class AbstractBootstrapType extends AbstractType
{
  protected function addFloatingLabelTextInput(FormBuilderInterface $builder,
                                               string               $child,
                                               string               $label,
                                               string               $placeholder = " ",
                                               array                $options = [])
  {
    $options1 = [
      'label' => $label,
      'attr' => [
        'placeholder' => $placeholder
      ],
      "row_attr" => [
        'class' => 'form-floating'
      ]];

    $builder->add($child, TextType::class, array_merge_recursive($options, $options1));
    return $this;
  }

  protected function addFeatherIconInputGroup(FormBuilderInterface $builder,
                                              string               $child,
                                              string               $feather_icon,
                                              string               $placeholder,
                                              array                $options = [])
  {
    return $this->addInputGroup($builder, $child, "<i data-feather='$feather_icon'></i>", $placeholder, $options);
  }

  protected function addInputGroup(FormBuilderInterface $builder,
                                   string               $child,
                                   string               $label,
                                   string               $placeholder,
                                   array                $options = [])
  {
    $options1 = [
      'label' => $label,
      'attr' => [
        'placeholder' => $placeholder,
      ],
      "row_attr" => [
        'class' => 'input-group'
      ]];

    $builder->add($child, TextType::class, array_merge_recursive($options, $options1));
    return $this;
  }

  protected function addSwitchInput(FormBuilderInterface $builder, string $child, bool $inline = false)
  {
    $builder->add($child, CheckboxType::class, [
      'label_attr' => [
        'class' => ($inline ? "checkbox-inline " : "") . ' checkbox-switch',
      ],
    ]);
    return $this;
  }

  protected function addButton(FormBuilderInterface $builder,
                               string               $child,
                               string               $class = "",
                               string               $buttonType = SubmitType::class)
  {
    $builder->add($child, $buttonType, [
      "attr" => ["class" => $class]
    ]);
    return $this;
  }
}