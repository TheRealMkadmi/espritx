<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostCategoryController extends AbstractController
{
    /**
     * @Route("/post/category", name="app_post_category")
     */
    public function index(): Response
    {
        return $this->render('post_category/index.html.twig', [
            'controller_name' => 'PostCategoryController',
        ]);
    }
}
