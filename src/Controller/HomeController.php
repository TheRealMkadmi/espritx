<?php

namespace App\Controller;

// ...
use App\Repository\CommentaireRepository;
use App\Repository\GroupPostRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
  /**
   * @Route("/user/home", name="app_home", methods={"GET"})
   */
  public function show(UserRepository $userRepository,PostRepository $repository, Request $request, CommentaireRepository $commentaireRepository,GroupPostRepository  $groupPostRepository): Response
  {
      return $this->forward('App\Controller\PostController::afficher_posts', [
          $userRepository,
          $repository,
          $request,
          $commentaireRepository,
          $groupPostRepository,
        ]);
  }

    /**
     * @Route("/admin/home", name="app_admin_home", methods={"GET"})
     */
  public function showAdmin(): Response
  {
      $pageConfigs = [
          'mainLayoutType' => 'vertical',
          'pageHeader' => false];

      return $this->render('views/content/dashboard/dashboard-analytics.html.twig',
          ['pageConfigs' => $pageConfigs]);
  }
}