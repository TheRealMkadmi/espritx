<?php

namespace App\DataFixtures;

use App\Entity\Group;
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

    // using sqrt to get a reasonable amount of permissions per role.
    $chunked_perms = array_chunk($loaded_perms->toArray(), (int)sqrt($loaded_perms->count()));
    foreach ($chunked_perms as $permission_chunk) {
      $role = new Group();
      $role->setSecurityTitle("ROLE_TEST_" . strtoupper($generator->unique()->randomNumber(5)));
      $role->setDisplayName(str_replace("'", "", implode(" ", $generator->words(2))));
      $role->setPermissions($permission_chunk);
      $manager->persist($role);
      $testing_groups->add($role);
    }
    $manager->flush();
    
    $this->addReferenceArray(self::LOADED_ROLE_FIXTURES, $testing_groups);
  }

  public function getDependencies()
  {
    return [PermissionFixtures::class];
  }
}
