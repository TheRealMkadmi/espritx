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
      $pageConfigs = [
          'mainLayoutType' => 'horizontal',
          'pageHeader' => false];

      return $this->render('views/content/dashboard/dashboard-analytics.html.twig', ['pageConfigs' => $pageConfigs]);
  }
}