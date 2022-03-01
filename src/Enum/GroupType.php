<?php

namespace App\Enum;

use App\Traits\RandomizableEnum;
use Elao\Enum\SimpleChoiceEnum;
use ReflectionClass;

/**
 * @extends ReadableEnum<string>
 *
 * @method static STUDENT
 * @method static SITE_STAFF
 * @method static FACULTY_STAFF
 * @method static TEACHERS
 */
final class GroupType extends SimpleChoiceEnum
{
  use RandomizableEnum;

  public const STUDENT = 'student';
  public const SITE_STAFF = 'site staff';
  public const FACULTY_STAFF = 'faculty staff';
  public const TEACHERS = 'teachers';
}