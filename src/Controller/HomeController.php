<?php

namespace App\Controller;

// ...
use App\Repository\PostRepository;
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
  public function show(PostRepository $repository): Response
  {

      $posts = $repository->getLatestPosts();
      $pageConfigs = [
          'mainLayoutType' => 'horizontal',
          'pageHeader' => false
      ];

      return $this->render('views/content/posts/User/acceuilposts.html.twig',
          ['pageConfigs' => $pageConfigs,
              'posts' => $posts]);
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