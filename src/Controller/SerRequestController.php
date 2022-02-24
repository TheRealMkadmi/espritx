<?php

namespace App\Controller;

use App\Entity\ServiceRequest;
use App\Form\SerRequestType;
use App\Repository\ServiceRequestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route ("/request")
 */
class SerRequestController extends AbstractController
{
    /**
     * @Route("/showAll", name="ser_requests")
     */
    public function affRequests(EntityManagerInterface $em, PaginatorInterface $paginator, Request $request): Response
    {
        $dql = <<<DQL
    select sr from App\Entity\ServiceRequest sr 
    DQL;
        $query = $em->createQuery($dql);

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10);
        return $this->render('views/content/apps/administrativeService/Requests/AfficheAll.html.twig', [
            'breadcrumbs' => [
                ["name" => "Management"],
            ],
            'pagination' => $pagination,
        ]);
    }

    /**
     * @Route("/add", name="SerivceReq_Add")
     */
    public function addService(Request $request, EntityManagerInterface $em): Response
    {
        $serreq = new ServiceRequest();
        $f = $this->createForm(SerRequestType::class, $serreq);
        $f->handleRequest($request);
        if ($f->isSubmitted() && $f->isValid()) {
            $em->persist($serreq);
            $em->flush();
            return $this->redirectToRoute('ser_requests', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('views/content/apps/administrativeService/Requests/request-service-form.html.twig', [
            'form' => $f->createView(),
        ]);
    }
    /**
     * @param EntityManagerInterface $em
     * @return Response
     * @Route ("/{id}/edit", name="SerivceReq_Edit")
     */
    public function ModifServices(EntityManagerInterface $em,Request $request, ServiceRequest $serreq): Response
    {
        $form=$this->createForm(SerRequestType::class,$serreq);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('ser_requests', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('views/content/apps/administrativeService/Requests/request-service-form.html.twig', [
            'serreq'=>$serreq,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @param EntityManagerInterface $em
     * @return Response
     * @Route ("/{id}/delete", name="SerivceReq_Del")
     */
    public function SuppServices(EntityManagerInterface $em, ServiceRequest $serreq): Response
    {
        $em->remove($serreq);
        $em->flush();
        return $this->redirectToRoute('/request/', [], Response::HTTP_SEE_OTHER);
    }

}
