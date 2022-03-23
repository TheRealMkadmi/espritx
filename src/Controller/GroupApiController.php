<?php

namespace App\Controller;

use App\Entity\Group;
use App\Entity\Permission;
use App\Entity\User;
use App\Form\ConversationType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/api/group")
 */
class GroupApiController extends AbstractApiController
{
  /**
   * @Route("/", name="group_api_index", methods={"GET"})
   */
  public function index_groups(EntityManagerInterface $entityManager)
  {
    $groups = $entityManager->getRepository(Group::class)->findAll();
    return $this->json($groups);
  }
  
  /**
   * @Route("/assignment-lists", name="group_api_combobox_populator", methods={"GET"})
   */
  public function populate_combobox(EntityManagerInterface $entityManager)
  {
    $ids = [];
    $names = [];
    /** @var Group $group */
    foreach ($entityManager->getRepository(Group::class)->findAll() as $group){
      $ids[] = $group->getId();
      $names[] = $group->getDisplayName();
    }
    return $this->json([
      "ids" => $ids,
      "names" => $names
    ]);
  }
}