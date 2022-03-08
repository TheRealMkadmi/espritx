<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/chat")
 */
class ChatController extends AbstractController
{
  /**
   * @Route("/", name="chat_index")
   */
  public function index(){
    return $this->render("views/content/apps/chat/app-chat-ajax.html.twig");
  }
}