<?php

namespace App\Controller;

use App\Entity\BlogPost;
use App\Entity\User;

use App\Form\BlogPostType;
use App\Repository\BlogPostRepository;
use App\Repository\PostCategoryRepository;
use App\Repository\UserRepository;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** @Route("/forum") */
class BlogPostController extends AbstractController
{
    /**
     * @Route("/blog/post", name="blog_post")
     */
    public function afficher_blog (BlogPostRepository $blogPostRepository): Response
    {
        $blogs = $blogPostRepository->findAll();
        return $this->render('blog_post/index.html.twig',  ['blogs' => $blogs,
            'controller_name' => 'BlogPostController',
        ]);
    }

    /**
     * @Route("/blogpost/new", name="newblogpost")
     * @param Request $request
     * @param PostCategoryRepository $repository
     * @return Response
     */


    public function newBlogPost(Request $request, PostCategoryRepository $repository): Response
    {


        $blogpost = new BlogPost();
        $form = $this->createForm(BlogPostType::class, $blogpost);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        if($form->isSubmitted() && $form->isValid()){
            $file = $form->get('image')->getData();
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $this->getParameter('imagesPost_directory'),
                $fileName
            );
            $blogpost->setImage($fileName);
            $em->persist($blogpost);
            $em->flush();
            return $this->redirectToRoute("blog_post");
        }
        return $this->render('blog_post/formblogpost.html.twig',['form' => $form->createView()]);



    }

    /**
     * @Route("/delete/blogpost/{id}",name="deleteblog_post")
     */
    public function supprimer_blog_post($id)
    {


        $entityManager = $this->getDoctrine()->getManager();

        $blogpost = $entityManager->getRepository(BlogPost::class)->find($id);
        $entityManager->remove($blogpost);



        $entityManager->flush();
        return $this->redirectToRoute('blog_post');


    }

    /**
     * @Route("blogpost/Update/{id}",name="update_blog")
     */
    function Update_blog_post(BlogPostRepository $repository,$id,Request $request)
    {
        $blogpost = $repository->find($id);
        $form = $this->createForm(BlogPostType::class, $blogpost);
        $form->add('Update', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("blog_post");
        }
        return $this->render('blog_post/Update.html.twig',
            [
                'f' => $form->createView(),

            ]);
    }

    /**
     * @param BlogPostRepository $repository
     * @param Request $request
     * @return Response
     * @Route("/searchCat",name="search")
     */
    function SearchCat(BlogPostRepository $repository,Request $request){
        $post_category=$request->get('search');
        $blogpost=$repository->SearchCat($post_category);
        return $this->render('blog_post/index.html.twig',['blog'=>$blogpost]);
    }







}




