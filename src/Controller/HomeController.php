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


      $commentaire = new Commentaire();
      $form = $this->createForm(CommentaireType::class, $commentaire);
      $limit = 10;
      $limit2 = 4;
      // les filtres
      $filters = $request->get("allgroups");
      //  dd($request);
      //    dd($filters);

      $posts = $repository->getLatestPosts($limit, $filters);
      $recentP = $repository->PostsMaxQuatre($limit2);
      $allgroups = $groupPostRepository->findAll();
      $membre = $userRepository->find($this->getUser());

      $mesgrps = $membre->getGroupes();
      //dd($mesgrps);
      $comments = $repository->CommentsMaxQuatre();
//dd($commentaire);


      $forms = [];

      if ($request->get('ajax')) {
          return new JsonResponse([
              'content' => $this->renderView('views/content/posts/User/contentPosts.html.twig', ['recentP' => $recentP, 'mes_groups' => $mesgrps, 'comments' => $comments, 'posts' => $posts, 'form' => $form->createView()
              ])

          ]);
      }


      return $this->render('views/content/posts/User/acceuilposts.html.twig', ['recentP' => $recentP, 'mes_groups' => $mesgrps, 'allgroups' => $allgroups, 'comments' => $comments, 'posts' => $posts, 'form' => $form->createView()]);

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