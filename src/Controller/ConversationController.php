<?php

namespace App\Controller;

use App\Entity\Conversation;
use App\Entity\User;
use App\Entity\Message;
use App\Form\ConversationType;
use App\Form\MessagesType;
use App\Repository\UserRepository;
use App\Repository\ConversationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;



class ConversationController extends AbstractApiController
{

    /**
     * @Route("conversation/adds", name="Conversation_Adds")
     */
    public function addsConversation(Request $request, EntityManagerInterface $em,UserRepository $repo): Response
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'chat-application',
        ];
        $conversation = new Conversation();
        $cur_part= new User();
        $cur_part=$this->getUser();
        $form = $this->createForm(ConversationType::class, $conversation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $conversation->setparticipant2($cur_part);

            $em->persist($conversation);
            $em->flush();
            return $this->redirectToRoute('conversation_shows');
        }
        return $this->render('views/content/apps/Conversation/ConvForm.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     *
     */
    public function changeactiv(){

    }
    /**
     * @Route("/conversation/shows", name="conversation_shows")
     */
    public function shows(Request $request, EntityManagerInterface $em): Response
    {  $pageConfigs = [
        'pageHeader' => false,
        'contentLayout' => "content-left-sidebar",
        'pageClass' => 'chat-application',
    ];
        $activeuser=$this->getUser();
        $conversations = $this->getDoctrine()->getRepository(Conversation::class)->findByid($this->getUser()->getid());
        $messages =$this->getDoctrine()->getRepository(Message::class)->findAll();
       $msg=new Message();
        $form = $this->createForm(MessagesType::class, $msg);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $msg->setUser($this->getUser());
            $msg->setConversation($conversations[0]);
            $em->persist($msg);
            $em->flush();
            return $this->redirectToRoute('conversation_shows', ['pageConfigs' => $pageConfigs,'conver'=>$conversations,'activeuser'=>$activeuser,'messages'=>$messages,'presseduser'=>$activeuser,'converid'=>$conversations], Response::HTTP_SEE_OTHER);
        }

        return $this->render('views/content/apps/chat/app-chat.html.twig', [
            'pageConfigs' => $pageConfigs,'conver'=>$conversations,'activeuser'=>$activeuser,'messages'=>$messages,'form'=>$form->createView(),'presseduser'=>$activeuser,'converid'=>$conversations
        ]);
    }
    /**
     * @Route("/conversation/shows/{id}", name="conversation_shows_param")
     */
    public function shows_param(Request $request, EntityManagerInterface $em,int $id): Response
    {  $pageConfigs = [
        'pageHeader' => false,
        'contentLayout' => "content-left-sidebar",
        'pageClass' => 'chat-application',
    ];
        $presseduser=$this->getDoctrine()->getRepository(User::class)->find($id);
        $activeuser=$this->getUser();
        $converid=$this->getDoctrine()->getRepository(Conversation::class)->findByTwoIds($activeuser->getid(),$presseduser->getid());
        $conversations = $this->getDoctrine()->getRepository(Conversation::class)->findByid($this->getUser()->getid());
        $messages =$this->getDoctrine()->getRepository(Message::class)->findAll();
        $msg=new Message();
        $form = $this->createForm(MessagesType::class, $msg);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $msg->setUser($activeuser);
            $msg->setConversation($converid[0]);
            $em->persist($msg);
            $em->flush();
            return $this->render('views/content/apps/chat/app-chat.html.twig', [
                'pageConfigs' => $pageConfigs,'conver'=>$conversations,'activeuser'=>$activeuser,'messages'=>$messages,'form'=>$form->createView(),'presseduser'=>$presseduser,'converid'=>$converid
            ]);
        }

        return $this->render('views/content/apps/chat/app-chat.html.twig', [
            'pageConfigs' => $pageConfigs,'conver'=>$conversations,'activeuser'=>$activeuser,'messages'=>$messages,'form'=>$form->createView(),'presseduser'=>$presseduser,'converid'=>$converid
        ]);
    }
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
        $conversation = new Conversation();
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
