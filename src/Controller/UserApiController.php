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
 * @Route("/api/user")
 */
class UserApiController extends AbstractApiController
{
  /**
   * @Route("/", name="user_api_index", methods={"GET"})
   */
  public function index_users(EntityManagerInterface $entityManager)
  {
    $users = $entityManager->getRepository(User::class)->findAll();
    return $this->json($users);
  }

  /**
   * @Route("/", name="user_api_add", methods={"POST"})
   */
  public function addUser(Request $request, EntityManagerInterface $entityManager)
  {
    $form = $this->buildForm(UserType::class);
    $form->submit($request->request->all(), false);
    if (!$form->isSubmitted() || !$form->isValid()) {
      return $this->respond($form, Response::HTTP_BAD_REQUEST);
    }

    /** @var User $user */
    $user = $form->getData();
    $entityManager->persist($user);
    $entityManager->flush();
    return $this->respond($user);
  }

  /**
   * @Route("/{id}", name="user_api_edit", methods={"PATCH"})
   * @ParamConverter("user", class="App\Entity\User")
   */
  public function editUser(Request $request, EntityManagerInterface $em, User $user)
  {
    $request->request->set("groups", array_map(static fn($g) => $g["id"], $request->request->get("groups")));

    $editForm = $this->buildForm(UserType::class, $user);
    $editForm->submit($request->request->all(), false);
    if (!$editForm->isSubmitted() || !$editForm->isValid()) {
      return $this->respond($editForm, Response::HTTP_BAD_REQUEST);
    }
    /** @var User $user */
    $user = $editForm->getData();
    $em->flush();
    return $this->respond($user);
  }

  /**
   * @Route("/{id}", name="user_api_delete", methods={"DELETE"})
   * @ParamConverter("user", class="App\Entity\User")
   */
  public function deleteUser(Request $request, EntityManagerInterface $em, User $user)
  {
    try {
      $em->remove($user);
      $em->flush();
      return $this->json(["status" => true]);
    } catch (\Exception $e) {
      return $this->json(["status" => false, "message" => $e->getMessage()], 500);
    }
  }

  /**
   * @Route("/fetch_my_data", name="user_fetch_authenticated_data", methods={"GET"})
   */
  public function return_current_user(Request $request)
  {
    $user = $this->getUser();
    return $this->json($user);
  }
}