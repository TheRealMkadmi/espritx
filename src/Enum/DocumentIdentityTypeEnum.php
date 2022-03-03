<?php

namespace App\Enum;

use App\Traits\RandomizableEnum;
use Elao\Enum\SimpleChoiceEnum;
use ReflectionClass;

/**
 * @extends ReadableEnum<string>
 *
 * @method static CIN
 * @method static PASSPORT
 */
final class DocumentIdentityTypeEnum extends SimpleChoiceEnum
{
  use RandomizableEnum;

  public const CIN = 'cin';
  public const PASSPORT = 'passport';
}