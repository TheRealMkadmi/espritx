<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
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
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($event);
            $entityManager->flush();
            $this->addFlash('notice', 'Evenement ajouté avec succée !');
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
     * @Route("/{id}/delete", name="delete")
     */
    public function supprimer($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $event = $entityManager->getRepository(Event::class)->find($id);
        $entityManager->remove($event);
        $this->addFlash('success', 'Evenement bien été supprimée.');


        $entityManager->flush();
        return $this->redirectToRoute('all_events_data');


    }

}
