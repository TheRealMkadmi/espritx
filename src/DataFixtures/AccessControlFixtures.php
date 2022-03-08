<?php

namespace App\DataFixtures;

use App\Entity\Commentaire;
use App\Entity\Group;
use App\Entity\Permission;
use App\Entity\Post;
use App\Entity\Service;
use App\Entity\ServiceRequest;
use App\Entity\User;
use App\Enum\AccessTypeEnum;
use App\Enum\GroupType;
use App\Service\AccessControlService;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AccessControlFixtures extends AbstractFixtureEx
{
  public function __construct(private AccessControlService $accessControlService)
  {
  }

  public const LOADED_ROLE_FIXTURES = "loaded-role-fixtures";

  public function load(ObjectManager $manager): void
  {
    $generator = Factory::create();
    $testing_groups = new ArrayCollection();

    foreach (GroupType::instances() as $groupType) {
      $group = new Group();
      $group->setGroupType($groupType);
      $group->setDisplayName("$groupType group " . $generator->unique()->randomNumber(2));
      $group->setSecurityTitle("ROLE_" . strtoupper(str_replace(" ", "_", $groupType)));
      switch ($groupType) {
        case GroupType::STUDENT():
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::get(AccessTypeEnum::READ | AccessTypeEnum::CREATE), Post::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::EDIT(), Post::class, $group, "object.getUser() == user");
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::CREATE(), ServiceRequest::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::get(AccessTypeEnum::READ | AccessTypeEnum::EDIT), ServiceRequest::class, $group, "object.Requester == user");
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ_CREATE(), Commentaire::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::EDIT(), Commentaire::class, $group, "object.getUser() == user");
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ(), User::class, $group);
          break;
        case GroupType::TEACHERS():
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ_CREATE(), Post::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::EDIT(), Post::class, $group, "object.getUser() == user");
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ_CREATE(), Commentaire::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::EDIT(), Commentaire::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::CREATE(), ServiceRequest::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ_EDIT(), ServiceRequest::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ(), User::class, $group);
          break;
        case GroupType::FACULTY_STAFF():
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ_CREATE(), ServiceRequest::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::DELETE_EDIT(), ServiceRequest::class, $group, "user.getGroups().contains(object.getType().getResponsible())");
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ_CREATE(), Post::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::EDIT(), Post::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ_CREATE(), Commentaire::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::EDIT(), Commentaire::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ(), Service::class, $group, "user.getGroups()contains(object.getRecipient())");
          break;
        case GroupType::SITE_STAFF():
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::MANAGE(), User::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ_CREATE_EDIT(), Group::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::MANAGE(), Permission::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ_CREATE_DELETE(), Commentaire::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::EDIT(), Commentaire::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::READ_CREATE_DELETE(), Post::class, $group);
          $this->accessControlService->GrantAccessToGroup(AccessTypeEnum::EDIT(), Post::class, $group);
          break;
        default:
          break;
      }
      $manager->persist($group);
      $testing_groups->add($group);
    }
    $manager->flush();
    $this->addReferenceArray(self::LOADED_ROLE_FIXTURES, $testing_groups);
  }
}
