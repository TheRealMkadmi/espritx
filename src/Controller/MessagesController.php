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
        return $this->render('messages/index.html.twig', [
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

            return $this->redirectToRoute('messages/index.html.twig', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('messages/index.html.twig', [
            'messages' => $message,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/messages/{id}/edit", name="messages_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Messages $messages, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(messagesType::class, $messages);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('messages', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('messages/index.html.twig', [
            'messages' => $messages,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("messages/{id}", name="messages_delete", methods={"POST"})
     */
    public function delete(Request $request, messages $messages, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$messages->getId(), $request->request->get('_token'))) {
            $entityManager->remove($messages);
            $entityManager->flush();
        }

        return $this->redirectToRoute('messages', [], Response::HTTP_SEE_OTHER);
    }


}
