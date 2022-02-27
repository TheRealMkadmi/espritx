<?php

namespace App\Controller;

use App\Entity\ConversationThread;
use App\Form\ConversationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;



class ConversationController extends AbstractApiController
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
            "conversations" => $conversations,"count"=>$count
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

            $entityManager->flush();
            return $this->redirectToRoute('conversation', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render("views/content/apps/Conversation/ConvForm.html.twig",[
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/api/conversation", name="api_conversation", methods={"GET","HEAD"})
     */
    public function api_show(): Response
    {
        $conversations = $this->getDoctrine()->getRepository(ConversationThread::class)->findAll();
        return $this->json($conversations) ;
    }
    /**
     * @Route("api/conversation/add", name="Conversation_Add_api", methods={"POST","HEAD"})
     */
    public function add_json(Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->buildForm(ConversationType::class);

        $form->handleRequest($request);

        if (!$form->isSubmitted() || !$form->isValid()) {
            return $this->respond($form, Response::HTTP_BAD_REQUEST);
        }

        /** @var ConversationThread $Conversation */
        $Conversation = $form->getData();

        $this->getDoctrine()->getManager()->persist($Conversation);
        $this->getDoctrine()->getManager()->flush();

        return $this->respond($Conversation);
    }
    /**
     * @Route ("api/converation/delete/{id}", name="Conversation_Del", methods={"GET","HEAD"})
     */
    public function api_delete(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $c = $entityManager->getRepository(ConversationThread::class)->find($id);
        $d="Successful deletion";
        $e="Failed deletion";
        if($c==null){
            return $this->json($e);
        }

          $entityManager->remove($c);
        $entityManager->flush();
        return $this->json($d);;
    }
    /**
     * @Route("api/conversation/edit/{id}", name="Conversation_edit_api", methods={"POST","HEAD"})
     */
    public function edit_json(Request $request, EntityManagerInterface $em,int $id): Response
    {
        $conversation = $em->getRepository(ConversationThread::class)->find($id);
        $form1 = $this->buildForm(ConversationType::class,$conversation);

        $form1->handleRequest($request);

        if (!$form1->isSubmitted() || !$form1->isValid()) {
            return $this->respond($form1, Response::HTTP_BAD_REQUEST);
        }

        /** @var ConversationThread $Conversation */
        $Conversation = $form1->getData();

        $this->getDoctrine()->getManager()->flush();

        return $this->respond($Conversation);
    }




}
