<?php

namespace App\Controller;

use App\Entity\Group;
use App\Form\GroupType;
use App\Form\PermissionType;
use App\Form\UserType;
use App\Repository\GroupRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Tetranz\Select2EntityBundle\Service\AutocompleteService;

/**
 * @Route("/group")
 */
class GroupController extends AbstractController
{

  /**
   * @Route("/create", name="group_new", methods={"GET", "POST"})
   */
  public function create(EntityManagerInterface $entityManager, Request $request): Response
  {
    $group = new Group();
    $form = $this->createForm(GroupType::class, $group);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $entityManager->persist($group);
      $entityManager->flush();
      return $this->redirectToRoute('group_index', [], Response::HTTP_CREATED);
    }

    return $this->render('views/content/apps/rolesPermission/role/app-access-role-form.html.twig', [
      'group' => $group,
      'form' => $form->createView(),
      'breadcrumbs' => [
        ["name" => "Management"],
        ["name" => "Groups", "link" => "group_index"],
        ["name" => "Create"]
      ]
    ]);
  }

  /**
   * @param Request $request
   * @param AutocompleteService $autocompleteService
   * @return JsonResponse
   * @Route("/autocomplete/group_form", name="ajax_autocomplete_groups")
   */
  public function autocompleteAction(Request $request, AutocompleteService $autocompleteService): JsonResponse
  {
    $result = $autocompleteService->getAutocompleteResults($request, PermissionType::class);
    return new JsonResponse($result);
  }  /**
   * @param Request $request
   * @param AutocompleteService $autocompleteService
   * @return JsonResponse
   * @Route("/autocomplete/user_form", name="ajax_autocomplete_groups_user_form")
   */
  public function ajax_autocomplete_groups_user_form(Request $request, AutocompleteService $autocompleteService): JsonResponse
  {
    $result = $autocompleteService->getAutocompleteResults($request, UserType::class);
    return new JsonResponse($result);
  }

  /**
   * @Route("/", name="group_index", methods={"GET"})
   */
  public function index(GroupRepository $groupRepository): Response
  {

    return $this->render('views/content/apps/rolesPermission/role/app-access-roles.html.twig', [
      'breadcrumbs' => [
        ["name" => "Management"],
        ["name" => "Groups", "link" => "group_index"],
      ],
      'groups' => $groupRepository->findAll(),
    ]);
  }

  /**
   * @Route("/{id}/edit", name="group_edit", methods={"GET", "POST"})
   */
  public function edit(Request $request, Group $group, EntityManagerInterface $entityManager): Response
  {
    $form = $this->createForm(GroupType::class, $group);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $entityManager->flush();
      return $this->redirectToRoute('group_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('views/content/apps/rolesPermission/role/app-access-role-form.html.twig', [
      'breadcrumbs' => [
        ["name" => "Management"],
        ["name" => "Groups", "link" => "group_index"],
      ],
      'group' => $group,
      'form' => $form->createView(),
    ]);
  }

  /**
   * @Route("/{id}/delete", name="group_delete", methods={"GET"})
   */
  public function delete(Request $request, Group $group, EntityManagerInterface $entityManager): Response
  {
    if ($this->isCsrfTokenValid('delete' . $group->getId(), $request->query->get('_token'))) {
      $entityManager->remove($group);
      $entityManager->flush();
    }
    return $this->redirectToRoute('group_index', [], Response::HTTP_SEE_OTHER);
  }
}
