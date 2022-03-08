<?php

namespace App\Twig;

use App\Entity\User;
use App\Enum\GroupType;
use JetBrains\PhpStorm\Pure;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ACLExtension extends AbstractExtension
{
  public function getFunctions()
  {
    return [
      new TwigFunction('isStudent', [$this, 'isStudent']),
      new TwigFunction('isSiteStaff', [$this, 'isSiteStaff']),
      new TwigFunction('isFacultyStaff', [$this, 'isFacultyStaff']),
      new TwigFunction('isTeacher', [$this, 'isTeacher']),
      new TwigFunction('isSuperAdmin', [$this, 'isSuperAdmin']),
    ];
  }

  public function isStudent(User $user)
  {
    return $user->isPartOfGroupType(GroupType::STUDENT());
  }

  public function isTeacher(User $user)
  {
    return $user->isPartOfGroupType(GroupType::TEACHERS());
  }

  public function isSiteStaff(User $user)
  {
    return $user->isPartOfGroupType(GroupType::SITE_STAFF());
  }

  public function isFacultyStaff(User $user)
  {
    return $user->isPartOfGroupType(GroupType::FACULTY_STAFF());
  }

  public function isSuperAdmin(User $user)
  {
    return $user->isPartOfGroupType(GroupType::SUPER_ADMIN());
  }
}

