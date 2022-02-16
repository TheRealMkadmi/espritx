<?php

namespace App\Controller;

use App\Entity\Permission;
use App\Form\PermissionType;
use App\Repository\PermissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/permission")
 */
class PermissionController extends AbstractController
{
  /**
   * @Route("/", name="permission_index", methods={"GET"})
   */
  public function index(PermissionRepository $permissionRepository): Response
  {
    return $this->render('views/content/apps/rolesPermission/permission/app-access-permission.html.twig', [
      'permissions' => $permissionRepository->findAll(),
    ]);
  }

  /**
   * @Route("/create", name="permission_create", methods={"GET", "POST"})
   */
  public function create(Request $request, EntityManagerInterface $entityManager): Response
  {
    $permission = new Permission();
    $form = $this->createForm(PermissionType::class, $permission);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $entityManager->persist($permission);
      $entityManager->flush();
      return $this->redirectToRoute('permission_index', [], Response::HTTP_CREATED);
    }

    return $this->render('views/content/apps/rolesPermission/permission/app-access-permission-form.html.twig', [
      'permission' => $permission,
      'form' => $form->createView(),
      'breadcrumbs' => [
        ["name" => "Management"],
        ["name" => "Permissions"],
        ["name" => "Create"],
      ]
    ]);
  }

  /**
   * @Route("/{id}", name="permission_show", methods={"GET"})
   */
  public function show(Permission $permission): Response
  {
    return $this->render('permission/show.html.twig', [
      'permission' => $permission,
    ]);
  }

  /**
   * @Route("/{id}/edit", name="permission_edit", methods={"GET", "POST"})
   */
  public function edit(Request $request, Permission $permission, EntityManagerInterface $entityManager): Response
  {
    $form = $this->createForm(PermissionType::class, $permission);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $entityManager->flush();

      return $this->redirectToRoute('permission_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('permission/edit.html.twig', [
      'permission' => $permission,
      'form' => $form->createView(),
    ]);
  }

  /**
   * @Route("/{id}", name="permission_delete", methods={"POST"})
   */
  public function delete(Request $request, Permission $permission, EntityManagerInterface $entityManager): Response
  {
    if ($this->isCsrfTokenValid('delete' . $permission->getId(), $request->request->get('_token'))) {
      $entityManager->remove($permission);
      $entityManager->flush();
    }

    return $this->redirectToRoute('permission_index', [], Response::HTTP_SEE_OTHER);
  }
}
