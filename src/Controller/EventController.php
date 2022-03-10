<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use App\Service\Mail;
use App\Services\MailerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/event")
 */
class EventController extends AbstractController
{
    private $mailer;
    public function __construct(Mail $mailer)
    {
        $this->mailer = $mailer;
    }
    /**
     * @Route("/", name="show_calendar")
     */
    public function index(): Response
    {
        return $this->render('views/content/apps/calendar/app-calendar.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    /**
     * @Route("/add", name="addNewEvent")
     */
    public function new(Request $request, EntityManagerInterface $entityManager, UserRepository $userRep): Response
    {
        $event = new Event();
        $event->setUser($this->getUser());
        $event->setstatus(false);
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
        $users=$userRep->findAll();
       // dd($users);
        $userEmail = [];
        foreach($users as $u){
            $userEmail[] =$u->getEmail();
        }
       // dd($userEmail);
        if ($form->isSubmitted() && $form->isValid()) {
           
            $entityManager->persist($event);
            $entityManager->flush();
            $this->mailer->sendNewEventEmail($userEmail,["event"=>$event]);
            $this->addFlash('success', 'Les membres d\'esprit sont notifies par un mail !');
            $this->addFlash('success', 'Evenement ajouté avec succée !');
            return $this->redirectToRoute('all_events_data');
            
        }

        return $this->render('event/add.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="update")
     */
    public function edit($id, Request $request, EventRepository $rep)
    {
        $event = $rep->find($id);
        
        $form1 = $this->createForm(EventType::class, $event);
        $form1->handleRequest($request);
        
        $em = $this->getDoctrine()->getManager();
        if (($form1->isSubmitted() && $form1->isValid())) {

            $em->persist($event);

            $em->flush();
            $this->addFlash('notice', 'Evenement modifie avec succée !');
            return $this->redirectToRoute("all_events_data");
        }
        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form1->createView(),
        ]);

    }

    /**
     * @Route("/{id}/delete", name="deleteEvent")
     */
    public function supprimer($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $event = $entityManager->getRepository(Event::class)->find($id);
        
        if($event->getStatus()==true){
        $entityManager->remove($event);
        $this->addFlash('success', 'Evenement bien été supprimée.');
        $entityManager->flush();
        }
        else{
            $this->addFlash('danger', 'Evenement ne peut pas etre supprimer q\'apres desactivation.');    
        }
        return $this->redirectToRoute('all_events_data');
    }

    /**
     * @Route("/{id}/deactivate", name="deactivateEvent")
     */

    public function annuler($id,UserRepository $userRep){
        $entityManager = $this->getDoctrine()->getManager();
        
        $event = $entityManager->getRepository(Event::class)->find($id);
        
        $users=$userRep->findAll();
       // dd($users);
        $userEmail = [];
        foreach($users as $u){
            $userEmail[] =$u->getEmail();
        }
        $event->setstatus(true);
        $this->mailer->sendDeactivatedEventEmail($userEmail,["event"=>$event]);
        $this->addFlash('success', 'Evenement bien desactivé.');
        $entityManager->flush();
        return $this->redirectToRoute('all_events_data');
        
    }

    /**
     * @Route("/{id}/delete", name="deleteEventback")
     */
    public function supprimerEvent($id)
    {
        //$this->denyAccessUnlessGranted([AccessType::READ], ServiceRequest::class);

        $entityManager = $this->getDoctrine()->getManager();

        $event = $entityManager->getRepository(Event::class)->find($id);
        $entityManager->remove($event);
        $this->addFlash('success', 'Evenement bien été supprimée.');


        $entityManager->flush();
        return $this->redirectToRoute('backoffice');


    }

    /**
     * @Route("/{id}/deleteAdmin", name="deleteEventback")
     */
    public function supprimercall($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $event = $entityManager->getRepository(Event::class)->find($id);
        $entityManager->remove($event);
        $this->addFlash('success', 'Call bien été supprimée.');


        $entityManager->flush();
        return $this->redirectToRoute('backofficeCall');
    }

}
