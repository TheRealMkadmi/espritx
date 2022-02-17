<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\GroupType;
use App\Form\PermissionType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Tetranz\Select2EntityBundle\Service\AutocompleteService;

/** @Route("/user") */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('views/content/apps/user/app-user-list.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

  /**
     * @Route("/new", name="user_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
    }


  /**
   * @param Request $request
   * @param AutocompleteService $autocompleteService
   * @return JsonResponse
   * @Route("/autocomplete/permission_form", name="ajax_autocomplete_users_permission_form")
   */
  public function ajax_autocomplete_users_permission_form(Request $request, AutocompleteService $autocompleteService): JsonResponse
  {
    $result = $autocompleteService->getAutocompleteResults($request, PermissionType::class);
    return new JsonResponse($result);
  }

  /**
   * @param Request $request
   * @param AutocompleteService $autocompleteService
   * @return JsonResponse
   * @Route("/autocomplete/group_form", name="ajax_autocomplete_users_group_form")
   */
  public function ajax_autocomplete_users_group_form(Request $request, AutocompleteService $autocompleteService): JsonResponse
  {
    $result = $autocompleteService->getAutocompleteResults($request, GroupType::class);
    return new JsonResponse($result);
  }
}
