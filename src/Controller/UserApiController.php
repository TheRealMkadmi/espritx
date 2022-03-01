<?php

namespace App\Controller;

use App\Entity\ConversationThread;
use App\Entity\Permission;
use App\Entity\User;
use App\Form\ConversationType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserApiController extends AbstractApiController
{
  /**
   * @Route("/api/user", name="user_api_index", methods={"GET","HEAD"})
   */
  public function index_users(EntityManagerInterface $entityManager)
  {
    $conversations = $entityManager->getRepository(User::class)->findAll();
    return $this->json($conversations);
  }

  /**
   * @Route("/api/user", name="user_api_add", methods={"POST"})
   */
  public function addUser(Request $request, EntityManagerInterface $entityManager)
  {
    $form = $this->buildForm(UserType::class);
    $form->handleRequest($request);
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
   * @Route("/api/user/{id}", name="user_api_edit", methods={"PUT"})
   */
  public function editUser(Request $request, EntityManagerInterface $em, $id)
  {
    $user = $em->getRepository(User::class)->find($id);
    $editForm = $this->buildForm(UserType::class, $user);
    $editForm->handleRequest($request);
    if (!$editForm->isSubmitted() || !$editForm->isValid()) {
      return $this->respond($editForm, Response::HTTP_BAD_REQUEST);
    }
    /** @var User $user */
    $user = $editForm->getData();
    $em->flush();
    return $this->respond($user);
  }

  /**
   * @Route("/api/user/{id}", name="user_api_edit", methods={"DELETE"})
   */
  public function deleteUser(Request $request, EntityManagerInterface $em, $id)
  {
    $user = $em->getRepository(User::class)->find($id);
    try {
      $em->remove($user);
      return $this->json(["status" => true]);
    } catch (\Exception $e) {
      return $this->json(["status" => false, "message" => $e->getMessage()], 500);
    }
  }
}