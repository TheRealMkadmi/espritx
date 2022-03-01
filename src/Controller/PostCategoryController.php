<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\PostCategory;
use App\Form\PostCategoryType;
use App\Repository\PostCategoryRepository;
use App\Repository\UserRepository;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostCategoryController extends AbstractController
{
    /**
     * @Route("/post/category", name="post_category")
     */
    public function index(PostCategoryRepository $postCategoryRepository): Response
    {
        $posts = $postCategoryRepository->findAll(); //afficher les données stocké de post category
        return $this->render('post_category/index.html.twig', [
            'posts' => $posts,
            'controller_name' => 'PostCategoryController',
        ]);
    }


    /**
     * @Route("/postcategory/new", name="newpostcategory")
     * @param Request $request
     * @param UserRepository $repository
     * @return Response
     * @throws Exception
     */
    public function newPostCategory(Request $request, UserRepository $repository): Response
    {


        $postcategory = new PostCategory();
        $form1 = $this->createForm(PostCategoryType::class, $postcategory);
        $form1->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        if (($form1->isSubmitted() && $form1->isValid())) {



            $em->persist($postcategory);
            $em->flush();





            return $this->redirectToRoute("post_category");

        }


        return $this->render('post_category/formcategory.html.twig', ['form' => $form1->createView()]);

    }

    /**
     * @Route("/delete/postcategory/{id}",name="deletepost_category")
     */
    public function supprimer_Post_Category($id)
    {


        $entityManager = $this->getDoctrine()->getManager();

        $postcategory = $entityManager->getRepository(PostCategory::class)->find($id);
        $entityManager->remove($postcategory);



        $entityManager->flush();
        return $this->redirectToRoute('post_category');


    }


}
