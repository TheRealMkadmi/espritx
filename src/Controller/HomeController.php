<?php

namespace App\Controller;

// ...
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
  /**
   * @Route("/home", name="app_home", methods={"GET"})
   */
  public function show(Request $request): Response
  {
    return $this->render('home/home.html.twig');
  }
}