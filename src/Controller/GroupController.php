<?php

namespace App\Controller;

use App\Entity\Group;
use App\Form\GroupType;
use App\Repository\GroupRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/group")
 */
class GroupController extends AbstractController
{

  /**
   * @Route("/new", name="group_new", methods={"GET", "POST"})
   */
  public function new(Request $request, EntityManagerInterface $entityManager): Response
  {
    $group = new Group();
    $form = $this->createForm(GroupType::class, $group);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $entityManager->persist($group);
      $entityManager->flush();
      return $this->redirectToRoute('group_index', [], Response::HTTP_CREATED);
    }

    return $this->render('group/new.html.twig', [
      'group' => $group,
      'form' => $form->createView(),
    ]);
  }

  /**
   * @Route("/", name="group_index", methods={"GET"})
   */
  public function index(GroupRepository $groupRepository): Response
  {
    return $this->render('group/index.html.twig', [
      'groups' => $groupRepository->findAll(),
    ]);
  }

  /**
   * @Route("/{id}", name="group_show", methods={"GET"})
   */
  public function show(Group $group): Response
  {
    return $this->render('group/show.html.twig', [
      'group' => $group,
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

    return $this->render('group/edit.html.twig', [
      'group' => $group,
      'form' => $form->createView(),
    ]);
  }

  /**
   * @Route("/{id}", name="group_delete", methods={"POST"})
   */
  public function delete(Request $request, Group $group, EntityManagerInterface $entityManager): Response
  {
    if ($this->isCsrfTokenValid('delete' . $group->getId(), $request->request->get('_token'))) {
      $entityManager->remove($group);
      $entityManager->flush();
    }
    return $this->redirectToRoute('group_index', [], Response::HTTP_SEE_OTHER);
  }
}
