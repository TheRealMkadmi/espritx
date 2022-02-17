<?php

namespace App\Enum;

use Elao\Enum\SimpleChoiceEnum;
use ReflectionClass;

/**
 * @extends ReadableEnum<string>
 *
 * @method static CIN
 * @method static PASSPORT
 */
final class DocumentIdentityTypeEnum extends AbstractSimpleChoiceEnumEx
{
  public const CIN = 'cin';
  public const PASSPORT = 'passport';
}