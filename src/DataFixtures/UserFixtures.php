<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Enum\UserStatus;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends AbstractFixtureEx implements DependentFixtureInterface
{
  private UserPasswordEncoderInterface $passwordEncoder;

  public function __construct(
    UserPasswordEncoderInterface $passwordEncoder
  )
  {
    $this->passwordEncoder = $passwordEncoder;
  }

  public function load(ObjectManager $manager): void
  {
    $groups = $this->getReferenceArray(GroupFixtures::LOADED_ROLE_FIXTURES)->toArray();
    $permissions = $this->getReferenceArray(PermissionFixtures::LOADED_PERMISSION_FIXTURES)->toArray();

    $generator = Factory::create();
    for ($i = 0; $i < 10; $i++) {
      $user = new User();
      $user->setFirstName($generator->firstName);
      $user->setLastName($generator->lastName);
      $user->setUserStatus(UserStatus::ACTIVE());
      $user->setEmail("test_user_" . $generator->unique()->randomNumber(5) . "@esprit.tn");
      $user->setPassword($this->passwordEncoder->encodePassword(
        $user,'12345'
      ));
      foreach ($this->sampleSubArray($groups, 1, count($groups)) as $group){
        $user->addGroup($group);
      }
      foreach ($this->sampleSubArray($permissions, 1, sqrt(count($permissions))) as $group){
        $user->addIndividualPermission($group);
      }
      $manager->persist($user);
    }
    $manager->flush();
  }

  public function getDependencies()
  {
    return [GroupFixtures::class, PermissionFixtures::class];
  }
}
