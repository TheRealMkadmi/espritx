<?php

namespace App\Service;

use App\Entity\Group;
use App\Entity\Permission;
use App\Entity\User;
use App\Enum\AccessTypeEnum;
use App\Repository\GroupRepository;
use App\Repository\PermissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use HaydenPierce\ClassFinder\ClassFinder;

class AccessControlService
{
  private array $subjects;

  public function __construct(
    private EntityManagerInterface $em
  )
  {
    $this->subjects = ClassFinder::getClassesInNamespace('App\Entity');
  }

  public function GrantAccessToGroup(AccessTypeEnum $accessType,
                                     string         $subject,
                                     Group          $group,
                                     string         $expression = null,
                                     string         $description = null,
                                     string         $title = null,
                                     bool           $flush = false)
  {
    $permission = $this->make_permission($accessType, $title, $subject, $expression, $description);
    $this->GrantPermissionToGroup($permission, $group);
    $this->em->persist($permission);
    if ($flush) {
      $this->em->flush();
    }
  }


  public function GrantPermissionToGroup(Permission $permission, Group $group, $flush = false)
  {
    $group->addPermission($permission);
    $this->em->persist($group);
    if ($flush)
      $this->em->persist($group);
  }

  public function GrantAccessToUser(AccessTypeEnum $accessType,
                                    string         $subject,
                                    User           $user,
                                    string         $description = null,
                                    string         $title = null,
                                    string         $expression = null,
                                    bool           $flush = false)
  {
    $permission = $this->make_permission($accessType, $title, $subject, $expression, $description);
    $this->GrantPermissionToUser($permission, $user);
    $this->em->persist($permission);
    if ($flush) {
      $this->em->flush();
    }
  }


  public function GrantPermissionToUser(Permission $permission, User $user, $flush = false)
  {
    $user->addIndividualPermission($permission);
    $this->em->persist($user);
    if ($flush)
      $this->em->flush();
  }


  /**
   * @param AccessTypeEnum $accessType
   * @param string|null $title
   * @param string $subject
   * @param string|null $expression
   * @param string|null $description
   * @return Permission
   */
  private function make_permission(AccessTypeEnum $accessType, ?string $title, string $subject, ?string $expression, ?string $description): Permission
  {
    $permission = new Permission();
    $permission->setAttribute($accessType);
    $permission->setTitle(is_null($title) ? ($accessType . " " . explode("\\", $subject)[2]) : $title);
    $permission->setExpression($expression);
    $permission->setDescription(is_null($description) ? "N/A" : $description);
    if (!in_array($subject, $this->subjects, true)) {
      throw new \InvalidArgumentException("Trying to set access control on a non entity.");
    }
    $permission->setSubject($subject);
    $permission->setEnabled(true);
    return $permission;
  }
}