<?php

namespace App\Controller;

use App\Entity\ConversationThread;
use App\Form\ConversationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;



class ConversationController extends AbstractController
{
    /**
     * @Route ("Test",name="test")
     */
    public function testcount()
    {
        $count = $this->getDoctrine()->getRepository(ConversationThread::class)->countallConver();
        return $this->render('Test.html.twig',["count"=>$count]
    );
    }
    /**
     * @Route("/conversation", name="conversation")
     */
    public function index(): Response
    {
        $conversations = $this->getDoctrine()->getRepository(ConversationThread::class)->findAll();
$count = $this->getDoctrine()->getRepository(ConversationThread::class)->countallConver();
        return $this->render('conversation/Affiche.html.twig', [
            "conversations" => $conversations,"count"=>$count,'breadcrumbs' => [
            ["name" => "Management"],
            ["name" => "Conversations", "link" => "message_show"],
          ]
        ]);
    }
    /**
     * @Route("conversation/add", name="Conversation_Add")
     */
    public function addConversation(Request $request, EntityManagerInterface $em): Response
    {
        $conversation = new ConversationThread();
        $form = $this->createForm(ConversationType::class, $conversation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($conversation);
            $em->flush();
            $conversations = $this->getDoctrine()->getRepository(ConversationThread::class)->findAll();

            return $this->redirectToRoute('conversation', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('views/content/apps/Conversation/ConvForm.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route ("converation/delete/{id}", name="Conversation_Del")
     */
    public function deleteconversation(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $c = $entityManager->getRepository(ConversationThread::class)->find($id);
        $entityManager->remove($c);
        $entityManager->flush();
        $conversations = $this->getDoctrine()->getRepository(ConversationThread::class)->findAll();

        return $this->redirectToRoute('conversation', [], Response::HTTP_SEE_OTHER);;
    }
    /**
     * @Route("/modify-conversation/{id}", name="modify_conversation")
     */
    public function modifyConversation(Request $request, int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();

        $conversation = $entityManager->getRepository(ConversationThread::class)->find($id);
        $form = $this->createForm(ConversationType::class, $conversation);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            dump($conversation);
            $entityManager->flush();
            return $this->redirectToRoute('conversation', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render("views/content/apps/Conversation/ConvForm.html.twig",[
            'form' => $form->createView(),
        ]);
    }


}
