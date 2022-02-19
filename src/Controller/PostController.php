<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Post;
use App\Entity\PostLike;
use App\Form\CommentaireType;
use App\Form\PostType;
use App\Repository\CommentaireRepository;
use App\Repository\PostLikeRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use function Doctrine\Common\Annotations\AnnotationException;

class PostController extends AbstractController
{

    private $postRepository;
    private $entityManager;

    public function __construct(PostRepository $postRepository,EntityManagerInterface $entityManager)
    {   $this->entityManager = $entityManager;
        $this->postRepository=$postRepository;
    }

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
    /// en tant qu'administrateur je veux gerer les commentaires

    /**
     * @Route("admin/post/all", name="postall")
     * @param PostRepository$repository
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function afficher_tous_les_Post(PostRepository $repository, Request $request): Response
    {

        $posts = $repository->findAll();


        return $this->render('views/content/posts/Admin/allpost.html.twig', [ 'posts' => $posts]);
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
            $this->addFlash('notice', 'Publication modifiée avec succée !');
            return $this->redirectToRoute("acceuil_user_posts");
        }
        return $this->render('views/content/posts/User/editPost.html.twig', ['form' => $form1->createView()]);

    }

    //////////////////Supprimer Post ////////////////////////////////////////
    /// En tant qu'utilisateur, je veux supprimer une publication.

    /**
     * @Route("/user/post/changedelete/{id}",name="changedelete_post")
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

        $post = $entityManager->getRepository(Post::class)->find($id);
        $entityManager->remove($post);
        $this->addFlash('success', 'Publication bien été supprimée.');


        $entityManager->flush();
        return $this->redirectToRoute('newpost');


    }
////////////////////////////// Acceuil posts ////////////////////////////
/// Entant qu'utilisateur je veux consulter les postes
    /**
     * @Route("/acceuil/user/post",name="acceuil_user_posts")
     */
    public function afficher_posts(PostRepository $repository, Request $request)
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $posts = $repository->findAll();


        return $this->render('views/content/posts/User/acceuilposts.html.twig', [ 'posts' => $posts,'form' => $form->createView()]);



    }
/////////////////////////////////////////////////////////////////////////////////////////////// Commentaires /////////////////////////////////
///








    /**
     * @Route("/post/{id}/addcomment", name="newcomment")
     * @param $id
     * @param Request $request
     * @param PostRepository $repository
     * @param UserRepository $rep
     * @return Response
     */
    public function addcomment($id, Request $request, PostRepository $repository, UserRepository $rep): Response
    {
        $pub = $repository->find($id);
        $now = new \DateTimeImmutable('now');
        $commentaire = new Commentaire();
//        $comment = $_POST['aa'];
        $form=$this->createForm(CommentaireType::class,$commentaire);
        $form->handleRequest($request);

        // $data = $request->request->get('aa');
//        dd($data);
        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $commentaire->setCreatedAt($now);
            $commentaire->setUser($rep->find($this->getUser()->getId()));
            $commentaire->setPost($pub);

            $em->persist($commentaire);
            $em->flush();
            return $this->json(['code' => 200, 'nbrcomments' => $pub->getCommentaires()->count(),
                'dateajout' => $commentaire->getCreatedAt()->format('H:i')], 200);
        }
        return $this->json(['code' => 200, 'nbrcomments' => $pub->getCommentaires()->count(),
        ], 200);
    }


















    /**
     * @Route("/comment/neww/{id}", name="comment_new")
     * @param Request $request
     * @param UserRepository $repository
     * @return Response
     * @throws Exception
     */
    public function ajouterComment($id,Request $request, UserRepository $repository,PostRepository $postRepository): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);

        $now = new \DateTimeImmutable('now');

        $post=$postRepository->find($id);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        if (($form->isSubmitted() && $form->isValid())) {
            $commentaire->setPost($post);

            $commentaire->setCreatedAt($now);


            $commentaire->setUser($repository->find($this->getUser()->getId()));
            $em->persist($commentaire);
            $em->flush();


            $this->addFlash("success", "Publication ajoutée ");
            return $this->json(['code' => 200, 'nbrcomments' => $post->getCommentaires()->count(),
                'dateajout' => $commentaire->getCreatedAt()->format('H:i')], 200);


        }



        return $this->render('views/content/posts/User/newComment.html.twig', ['form' => $form->createView()]);
    }

//////////////////////////////////////////////////Comment Modif////////////////////////////
/// en tant qu'utilisateur je veux editer mon commentaire
    /**
     * @Route("/comment/edit/{id}", name="editcomment")
     * @param Request $request
     * @param UserRepository $repository
     * @return Response
     * @throws Exception
     */
    public function editcommentaire($id, Request $request, UserRepository $repository, CommentaireRepository $rep): Response
    {

        $comm = $rep->find($id);

        $form1 = $this->createForm(CommentaireType::class, $comm);
        $form1->handleRequest($request);

        // dd($post);
        $em = $this->getDoctrine()->getManager();
        if (($form1->isSubmitted() && $form1->isValid())) {


            $comm->setUser($repository->find($this->getUser()->getId()));
            $em->persist($comm);

            $em->flush();
            $this->addFlash('notice', 'Commentaire modifiée avec succée !');
            return $this->redirectToRoute("acceuil_user_posts");
        }
        return $this->render('views/content/posts/User/editComment.html.twig', ['form' => $form1->createView()]);

    }

/////////////////////////////////////Delete comment//////////////////////////////
/// En tant qu'utilisateur je veux supprimer mes commentaires////////////////////
    /**
     * @Route("/user/delete/post/{id}",name="delete_commnt_user")
     */
    public function supprimerComment($id)
    {


        $entityManager = $this->getDoctrine()->getManager();

        $post = $entityManager->getRepository(Commentaire::class)->find($id);
        $entityManager->remove($post);
        $this->addFlash('success', 'commentaire bien été supprimée.');


        $entityManager->flush();
        return $this->redirectToRoute('acceuil_user_posts');


    }

///////////////////////// Likes ////////////////////////////
/// cette fonction permet de liker ou unliker un post
    /**
     * @param Post $post
     * @param PostLikeRepository $likeRepository
     * @return Response
     * @Route ("/post/{id}/like", name="post_like")
     */
    public function like(Post $post, PostLikeRepository $likeRepository):Response{
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        // savoir si le user est connecté ou nn
        if(!$user)return $this->json([
            'code'=>403,
            'message'=>'il faut etre connecté'
        ],403);
        // savoir si ce post est liké par user ou non
        if($post->isLikedByUser($user)){
            // retrouver le j'aime
            $like=$likeRepository->findOneBy([
                'post'=>$post,
                'user'=>$user
            ]);
            $em->remove($like);
            $em->flush();

            return $this->json([
                'code'=>200,
                'message'=>'like bien supprimé',
                'likess'=>$likeRepository->count(['post'=>$post])
            ],200);

        }

        $like=new PostLike();
        $like->setPost($post)
            ->setUser($user);
        $em->persist($like);
        $em->flush();
        return $this->json([
            'code'=>200,
            'message'=>'like bien ajouté',
            'likess'=>$likeRepository->count(['post'=>$post])
        ],200);


    }



}