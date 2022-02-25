<?php

namespace App\Controller;

use App\Entity\Messages;
use App\Form\MessagesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessagesController extends AbstractController
{
  /**
   * @Route("/messages", name="messages")
   */
  public function index(): Response
  {
    return $this->render('messages/Realindex.html.twig', [
      'controller_name' => 'MessagesController',
    ]);
  }

  /**
   * @Route("/messages/new", name="messages_new", methods={"GET", "POST"})
   */
  public function new(Request $request, EntityManagerInterface $entityManager): Response
  {
    $message = new messages();
    $form = $this->createForm(MessagesType::class, $message);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $entityManager->persist($message);
      $entityManager->flush();

      return $this->redirectToRoute('message_show', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('messages/index.html.twig', [
      'messages' => $message,
      'form' => $form->createView(),
    ]);

  }





  /**
   * @Route("/messages/edit/{id}", name="messages_edit", methods={"GET", "POST"})
   */
  public function edit(Request $request, Messages $messages, EntityManagerInterface $entityManager): Response
  {
    $form = $this->createForm(MessagesType::class, $messages);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $entityManager->flush();

      return $this->redirectToRoute('message_show', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('messages/index.html.twig', [
      'messages' => $messages,
      'form' => $form->createView(),
    ]);
  }
  /**
   * @Route("messages/delete/{id}", name="messages_delete")
   */
  public function delete(int $id): Response
  {
    $entityManager = $this->getDoctrine()->getManager();
    $message = $entityManager->getRepository(Messages::class)->find($id);
    $entityManager->remove($message);
    $entityManager->flush();
    return $this->redirectToRoute('message_show', [], Response::HTTP_SEE_OTHER);
  }

  /**
   * @Route ("messages/show", name="message_show")
   */
  public function show(): Response
  {
    $messages = $this->getDoctrine()->getRepository(Messages::class)->findAll();

    return $this->render('conversation/AfficheMessages.html.twig', [
      "messages" => $messages,
    ]);

  }




}
