<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Doctrine\Common\Annotations\AnnotationException;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }

    ///////////////////// Afficher tous les posts /////////////////////////

    /**
     * @Route("/post/all", name="post")
     * @param PostRepository$repository
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function afficher_tous_les_Post(PostRepository $repository, Request $request): Response
    {

        $posts = $repository->findAll();


        return $this->render('views/content/posts/Admin/allposts.html.twig', [ 'posts' => $posts]);
    }


    /////////////////// Ajouter post /////////////////
    /// En tant qu'utilisateur, je veux ajouter une publication.
    ///
    /**
     * @Route("/post/new", name="newpost")
     * @param Request $request
     * @param UserRepository $repository
     * @return Response
     * @throws Exception
     */
    public function ajouterPost(Request $request, UserRepository $repository): Response
    {
        try {
            $now = new \DateTimeImmutable('now');
            $post = new Post();
            $form1 = $this->createForm(PostType::class, $post);
            $form1->handleRequest($request);

            $em = $this->getDoctrine()->getManager();
            if (($form1->isSubmitted() && $form1->isValid())) {
                $post->setIsValid(0);
                $post->setIsDeleted(0);

                $post->setCreatedAt($now);
                $post->setUpdatedAt($now);

                $post->setUser($repository->find($this->getUser()->getId()));
                $em->persist($post);
                $em->flush();


                $this->addFlash("success", "Publication ajoutée ");



            }

        } catch (\Exception $e) {
            echo "Exception Found - " . $e->getMessage() . "<br/>";
        }
        return $this->render('views/content/posts/User/newPost.html.twig', ['form' => $form1->createView()]);
    }
////////////////////Modifuer Post ////////////////////////////////////
/// En tant qu'utilisateur, je veux modifier une publication.
    /**
     * @Route("/post/edit/{id}", name="editpost")
     * @param Request $request
     * @param UserRepository $repository
     * @return Response
     * @throws Exception
     */
    public function editpublication($id, Request $request, UserRepository $repository, PostRepository $rep): Response
    {

        $post = $rep->find($id);

        $form1 = $this->createForm(PostType::class, $post);
        $form1->handleRequest($request);

       // dd($post);
        $em = $this->getDoctrine()->getManager();
        if (($form1->isSubmitted() && $form1->isValid())) {

            $post->setUpdatedAt(new \DateTimeImmutable('now'));
            $post->setUser($repository->find($this->getUser()->getId()));
            $em->persist($post);

            $em->flush();
            $this->addFlash('notice', 'Publication modifier avec succée !');
            return $this->redirectToRoute("post");
        }
//        return $this->render('publicationsU/editpublication.html.twig', ['pub1' => $pub1, 'form' => $form->createView(), 'form1' => $form1->createView()]);
       return $this->render('views/content/posts/User/editPost.html.twig', ['form' => $form1->createView()]);

    }

    //////////////////Supprimer Post ////////////////////////////////////////
    /// En tant qu'utilisateur, je veux supprimer une publication.

    /**
     * @Route("/admin/post/changedelete/{id}",name="changedelete_post")
     */
    public function supprimer_Post_user(Post $post,PostRepository $postRepository){
        $post = $postRepository->changeDelete($post);
        return $this->json(["message"=>"success","value"=>$post->getIsDeleted()]);
    }

    /////////////////////////////Approuver Post/////////////////////
    /// En tant qu'administrateur, je veux approuver une publication.
    /// En tant qu'administrateur, je veux refuser une publication.
    /**
     * @Route("/admin/post/changevalidite/{id}",name="changevalidite_post")
     */
    public function approuverPost(Post $post,PostRepository $postRepository){
        $post = $postRepository->changeValidite($post);
        return $this->json(["message"=>"success","value"=>$post->getIsValid()]);
    }

    //////////////////////////Supprimer Post //////////////////////////////
    /// En tant qu'administrateur, je veux supprimer defintivement une publication.

    /**
     * @Route("/admin/delete/post/{id}",name="deletepost_admin")
     */
    public function supprimer_Post_admin($id)
    {


        $entityManager = $this->getDoctrine()->getManager();

        $op = $entityManager->getRepository(Post::class)->find($id);
        $entityManager->remove($op);
        $this->addFlash('success', 'Publication bien été supprimée.');


        $entityManager->flush();
        return $this->redirectToRoute('newpost');


    }


}
