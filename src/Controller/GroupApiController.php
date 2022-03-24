<?php

namespace App\Controller;

use App\Entity\Group;
use App\Entity\Permission;
use App\Entity\User;
use App\Form\ConversationType;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Serializer\Normalizer\UserNormalizer;
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
    foreach ($entityManager->getRepository(Group::class)->findAll() as $group) {
      $ids[] = $group->getId();
      $names[] = $group->getDisplayName();
    }
    return $this->json([
      "ids" => $ids,
      "names" => $names
    ]);
  }

  /**
   * @Route("/{id}/users", name="group_users_api_show", methods={"GET"})
   * @ParamConverter("group", class="App\Entity\Group")
   */
  public function get_group_users(Request $request, Group $group)
  {
    $members = $group->getMembers();
    return $this->json($members);
  }

  /**
   * @Route("/{id}/users", name="group_users_api_add", methods={"POST"})
   * @ParamConverter("group", class="App\Entity\Group")
   */
  public function add_group_user(Request                $request,
                                 Group                  $group,
                                 UserRepository         $userRepository,
                                 EntityManagerInterface $em,
                                 UserNormalizer         $userNormalizer
  )
  {
    $matching_criteria = $userRepository->findBy(["email" => $request->get("email")]);
    if ($matching_criteria === null) {
      return $this->json(["result" => "User does not exist"]);
    }
    if (count($matching_criteria) > 1) {
      return $this->json(["result" => "Invalid search query. More than 2 users fit the search results."]);
    }
    $user = $matching_criteria[0];
    $members = $group->getMembers();
    if ($members->contains($user)) {
      return $this->json(["result" => "User already in group"]);
    }
    $group->addMember($user);
    $em->flush();
    return $this->json(["result" => "User added successfully", "user" => $userNormalizer->normalize($user)]);
  }

  /**
   * @Route("/{gid}/users/{uid}", name="group_users_api_delete", methods={"DELETE"})
   * @ParamConverter("group", class="App\Entity\Group", options={"gid" = "id"})
   * @ParamConverter("user", class="App\Entity\User", options={"uid" = "id"})
   */
  public function delete_group_user(Request $request,
                                    Group $group,
                                    User $user,
                                    EntityManagerInterface $entityManager)
  {
    $members = $group->getMembers();
    if (!$members->contains($user)) {
      return $this->json(["result" => "User is not in group"]);
    }
    $group->removeMember($user);
    $entityManager->flush();
    return $this->json(["result" => "User removed successfully"]);
  }
}