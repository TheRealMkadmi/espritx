<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessagesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    /**
     * @Route("/message/add", name="add_message")
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $message = new Message();
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
}
