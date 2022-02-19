<?php

namespace App\DataFixtures;

use App\Entity\Group;
use App\Entity\Service;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ServiceFixtures extends AbstractFixtureEx implements DependentFixtureInterface
{
  public function load(ObjectManager $manager): void
  {
    $groups = $this->getReferenceArray(GroupFixtures::LOADED_ROLE_FIXTURES)->toArray();
    $generator = Factory::create();
    for ($i = 0; $i < 30; $i++) {
      $service = new Service();
      $service->setName("Demand of " . str_replace("'", "", implode(" ", $generator->words(2))));
      /** @var Group $group */
      foreach ($this->sampleSubArray($groups, 1, 2) as $group){
        $service->addRecipient($group);
      }
      $service->setResponsible($groups[array_rand($groups)]);
      $manager->persist($service);
    }
    $manager->flush();
  }

  public function getDependencies()
  {
    return [GroupFixtures::class];
  }
}
