<?php

namespace App\Controller;


use App\Entity\Channel;
use App\Entity\Message;
use App\Form\ChannelType;
use App\Form\UserType;
use App\Repository\ChannelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\Hub;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * @Route("/chat")
 */
class ChatController extends AbstractController
{
    /**
     * @Route("/", name="chat_index")
     */
    public function index()
    {
        $messages = $this->getDoctrine()->getRepository(Message::class)->findAll();
        $channels = $this->getUser()->getChannels();
        $channel = new Channel();
        $channel->setId(-1);
        return $this->render("views/content/apps/chat/app-chat-ajax.html.twig", [
            "channels" => $channels ?? [], "curuser" => $this->getUser(), "currentchannel" => $channel, "messages" => $messages
        ]);
    }

    /**
     * @Route("/create-channel", name="create_channel_ajax", methods={"GET", "POST"})
     */
    public function createChannel(Request $request, EntityManagerInterface $entityManager): Response
    {
        $channel = new Channel();
        $form = $this->createForm(ChannelType::class, $channel);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $channel->addParticipant($this->getUser());
            $entityManager->persist($channel);
            $entityManager->flush();
            return $this->redirectToRoute('chat_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render("views/content/apps/Conversation/ConvForm.html.twig", [
            "channels" => $channels ?? [], 'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/channel/{id}", name="chat_show")
     * @ParamConverter("channel", class="App\Entity\Channel")
     */
    public function showConversation(Request $request, Channel $channel): Response
    {
        $messages = $this->getDoctrine()->getRepository(Message::class)->findByChannel($channel->getId());
        $user = $this->getUser();
        $channels = $user->getChannels();
        if (!$channel->getParticipants()->contains($user))
            throw new AccessDeniedException("User $user is not part of this channel.");
        return $this->render("views/content/apps/chat/app-chat-ajax.html.twig", [
            "channels" => $channels,
            "curuser" => $user,
            "currentchannel" => $channel,
            "messages" => $messages
        ]);
    }

    /**
     * @Route("/send-message/{channel}", name="send_message", methods={"POST"})
     * @ParamConverter("channel", class="App\Entity\Channel")
     */
    public function send_message(Request $request, HubInterface $hub, Channel $channel, EntityManagerInterface $em): Response
    {
        $message = new Message();
        $message->setChannel($channel);
        $message->setContent($request->get("message"));
        $message->setAuthor($this->getUser());
        $em->persist($message);
        $em->flush();
        $update = new Update(
            "http://example.com/books/1",
            json_encode(['status' => 'OutOfStock'], JSON_THROW_ON_ERROR));
        $hub->publish($update);
        return new Response('published!');
    }

    /**
     * @Route("/test-pub", name="test_pub")
     */
    public function test_pub(Request $request, HubInterface $hub)
    {
        $update = new Update(
            'http://example.com/books/1',
            json_encode(['status' => 'OutOfStock'])
        );
        $res = $hub->publish($update);
        dd($res);
        return new Response('published!');
    }

    /**
     * @Route ("/Back/", name="chat_back")
     */
    public function backOfficeChat(ChannelRepository $repository, PaginatorInterface $paginator, Request $request)
    {
        $chats = $repository->findAll();
        $paginatedchats = $paginator->paginate(
            $chats, 1, 10
        );
        return $this->render('views/content/apps/chat/app-chat-back.html.twig', [
            'breadcrumbs' => [
                ["name" => "Management"],
                ["name" => "All Chats", "link" => ""]
            ],
            'pagination' => $paginatedchats,
        ]);
    }

    /**
     * @Route("/back/channel/delete/{id}", name="chat_delete")
     * @ParamConverter("channel", class="App\Entity\Channel")
     */
    public function delConversation(EntityManagerInterface $em, Channel $channel): Response
    {
        $em->remove($channel);
        $em->flush();
        return $this->redirectToRoute('chat_back', [], Response::HTTP_SEE_OTHER);
    }
}