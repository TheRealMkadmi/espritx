<?php

namespace App\DataFixtures;

use App\Entity\Permission;
use App\Entity\Post;
use App\Entity\User;
use App\Enum\AccessTypeEnum;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PermissionFixtures extends AbstractFixtureEx
{
  public const LOADED_PERMISSION_FIXTURES = "loaded_perms";

  public function load(ObjectManager $manager): void
  {
    $perms = new ArrayCollection();
    $generator = Factory::create();
    for ($i = 0; $i < 25; $i++) {
      $perm = new Permission();
      $perm->setTitle(implode(" ", $generator->words(3)));
      $perm->setDescription(str_replace("'", "", $generator->realText(60)));
      $perm->setEnabled(true);
      $perm->setAttribute(AccessTypeEnum::Random());
      $perm->setSubject(User::class);
      $manager->persist($perm);
      $perms->add($perm);
    }
    $manager->flush();
    $this->addReferenceArray(self::LOADED_PERMISSION_FIXTURES, $perms);
  }
}
