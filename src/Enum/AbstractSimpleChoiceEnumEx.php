<?php

namespace App\Enum;

use Elao\Enum\SimpleChoiceEnum;
use ReflectionClass;

abstract class AbstractSimpleChoiceEnumEx extends SimpleChoiceEnum
{
  public static function Random(): static
  {
    $refl = new ReflectionClass(static::class);
    $statuses = array_values($refl->getConstants());
    return self::get($statuses[array_rand($statuses)]);
  }
}