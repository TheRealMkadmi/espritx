<?php

namespace App\Controller;

use App\Repository\PostCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostCategoryController extends AbstractController
{
    /**
     * @Route("/post/category", name="app_post_category")
     */
    public function index(PostCategoryRepository $postCategoryRepository): Response
    {
        $posts = $postCategoryRepository->findAll(); //afficher les données stocké de post category
        return $this->render('post_category/index.html.twig', [
            'posts' => $posts,
            'controller_name' => 'PostCategoryController',
        ]);
    }
}
