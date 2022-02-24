<?php

namespace App\DataFixtures;

use App\Entity\Group;
use App\Enum\GroupType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class GroupFixtures extends AbstractFixtureEx implements DependentFixtureInterface
{
  public const LOADED_ROLE_FIXTURES = "loaded-role-fixtures";

  public function load(ObjectManager $manager): void
  {
    $generator = Factory::create();
    $testing_groups = new ArrayCollection();

    /** @var Collection $loaded_perms */
    $loaded_perms = $this->getReferenceArray(PermissionFixtures::LOADED_PERMISSION_FIXTURES);

    // using sqrt to get a reasonable amount of permissions per group.
    $chunked_perms = array_chunk($loaded_perms->toArray(), (int)sqrt($loaded_perms->count()));
    foreach ($chunked_perms as $permission_chunk) {
      $group = new Group();
      $group->setSecurityTitle("ROLE_TEST_" . strtoupper($generator->unique()->randomNumber(5)));
      $group->setDisplayName(((bool)random_int(0, 1)) ? "Service " : "" . str_replace("'", "", implode(" ", $generator->words(2))));
      $group->setGroupType(GroupType::Random());
      foreach ($permission_chunk as $permission) {
        $group->addPermission($permission);
      }
      $manager->persist($group);
      $testing_groups->add($group);
    }
    $manager->flush();

    $this->addReferenceArray(self::LOADED_ROLE_FIXTURES, $testing_groups);
  }

  public function getDependencies()
  {
    return [PermissionFixtures::class];
  }
}
