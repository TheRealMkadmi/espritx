<?php

namespace App\Controller;

use App\Entity\Channel;
use App\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\Hub;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;

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
    $channels = $this->getUser()->getChannels();
    return $this->render("views/content/apps/chat/app-chat-ajax.html.twig", [
      "channels" => $channels ?? []
    ]);
  }

  /**
   * @Route("/create-channel", name="create_channel_ajax", methods={"POST"})
   */
  public function createChannel(Request $request)
  {
    return new Response();
  }

  /**
   * @Route("/channel/{id}", name="chat_show")
   */
  public function showConversation(Request $request, Channel $channel): Response
  {
    return new Response('published!');
  }

  /**
   * @Route("/send-message", name="send_message", methods={"POST"})
   */
  public function send_message(Request $request, HubInterface $hub, /*Channel $channel,*/ EntityManagerInterface $em): Response
  {
    $message = new Message();
    //$message->setChannel($channel);
    $message->setContent($request->get("message"));
    $message->setAuthor($this->getUser());
    $em->persist($message);
    $em->flush();
    $update = new Update(
      'conversation-11',
      json_encode(['status' => 'OutOfStock'], JSON_THROW_ON_ERROR)
    );
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
      json_encode(['status' => 'OutOfStock'], JSON_THROW_ON_ERROR)
    );

    $hub->publish($update);

    return new Response('published!');
  }
}