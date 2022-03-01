<?php

namespace App\Controller;

use App\Entity\Call;
use App\Form\CallType;
use App\Form\EventType;
use App\Repository\CallRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/call")
 */
class CallController extends AbstractController
{
    /**
     * @Route("/", name="call")
     */
    public function index(): Response
    {
        return $this->render('call/index.html.twig', [
            'controller_name' => 'CallController',
        ]);
    }

    /**
     * @Route("/add", name="addNewCall")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {

        $user = $this->getUser();
        // savoir si le user est connecté ou nn

        /*  if (!$user){
            $this->addFlash('notice', 'U R NOT CONNECTED !');
            return $this->redirectToRoute('indexCall');
        }  */
        $call = new Call();

        $form = $this->createForm(CallType::class, $call);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($call);
            $entityManager->flush();
            $this->addFlash('notice', 'call ajouté avec succée !');
            return $this->redirectToRoute('indexCall');
        }

        return $this->render('call/add.html.twig', [
            'call' => $call,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/editcall", name="updatecall")
     */
    public function edit($id, Request $request, CallRepository $rep)
    {
        $call = $rep->find($id);
        /*  $user = $this->getUser();
        // savoir si le user est connecté ou nn

        if (!$user){
            $this->addFlash('notice', 'U R NOT CONNECTED !');
            return $this->redirectToRoute('indexCall');
        } 
        if($user->getId()!=$call->getUser()->getId()){
            $this->addFlash('notice', 'U cant change this bro till u be the owner !');
            return $this->redirectToRoute('indexCall');
        } */


        $form1 = $this->createForm(CallType::class, $call);
        $form1->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        if (($form1->isSubmitted() && $form1->isValid())) {

            $em->persist($call);

            $em->flush();
            $this->addFlash('notice', 'call modifie avec succée !');
            return $this->redirectToRoute("indexCall");
        }
        return $this->render('call/edit.html.twig', [
            'call' => $call,
            'form' => $form1->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", name="deleteCall")
     */
    public function supprimer($id)
    {


        $entityManager = $this->getDoctrine()->getManager();

        $call = $entityManager->getRepository(Call::class)->find($id);

        /*
        $user = $this->getUser();
        // savoir si le user est connecté ou nn

        if (!$user){
            $this->addFlash('notice', 'U R NOT CONNECTED !');
            return $this->redirectToRoute('indexCall');
        } 
        if($user->getId()!=$call->getUser()->getId()){
            $this->addFlash('notice', 'U cant change this bro till u be the owner !');
            return $this->redirectToRoute('indexCall');
        }
        */
        $entityManager->remove($call);
        $this->addFlash('success', 'Call bien été supprimée.');


        $entityManager->flush();
        return $this->redirectToRoute('indexCall');
    }

    /**
     * @Route("/{id}/deleteAdmin", name="deleteCallback")
     */
    public function supprimercall($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $call = $entityManager->getRepository(Call::class)->find($id);
        $entityManager->remove($call);
        $this->addFlash('success', 'Call bien été supprimée.');


        $entityManager->flush();
        return $this->redirectToRoute('backoffice');
    }
}
