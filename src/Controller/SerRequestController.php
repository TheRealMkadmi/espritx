<?php

namespace App\Controller;

use App\Entity\ServiceRequest;
use App\Form\SerRequestType;
use App\Repository\ServiceRepository;
use App\Repository\ServiceRequestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

/**
 * @Route ("/request")
 */
class SerRequestController extends AbstractController
{
    /**
     * @Route ("/user/requests", name="SerivceReq_User")
     * @return Response
     */
    public function affUserRequests(): Response
    {
        $user = $this->getUser();
        $SerReq = $user->getServiceRequests();
        $pageConfigs = [
            'mainLayoutType' => 'horizontal',
            'pageHeader' => false
        ];
        return $this->render('views/content/apps/administrativeService/Requests/AfficheUser.html.twig', [
            'pageConfigs' => $pageConfigs,
            'SerReq' => $SerReq,
            'user' => $user,
        ]);
    }

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
    public function addServiceRequest(Request $request, EntityManagerInterface $em): Response
    {
        $serreq = new ServiceRequest();
        $f = $this->createForm(SerRequestType::class, $serreq);
        $f->handleRequest($request);
        if ($f->isSubmitted() && $f->isValid()) {
            $em->persist($serreq);
            $em->flush();
            return $this->redirectToRoute('SerivceReq_User', [], Response::HTTP_SEE_OTHER);
        }

        $pageConfigs = [
            'mainLayoutType' => 'horizontal',
            'pageHeader' => false
        ];
        return $this->render('views/content/apps/administrativeService/Requests/request-service-form.html.twig', [
            'form' => $f->createView(),
            'pageConfigs' => $pageConfigs,
        ]);
    }

    /**
     * @param EntityManagerInterface $em
     * @return Response
     * @Route ("/{id}/edit", name="SerivceReq_Edit")
     */
    public function ModifServiceRequest(EntityManagerInterface $em, Request $request, ServiceRequest $serreq): Response
    {
        $form = $this->createForm(SerRequestType::class, $serreq);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('SerivceReq_User', [], Response::HTTP_SEE_OTHER);
        }
        $pageConfigs = [
            'mainLayoutType' => 'horizontal',
            'pageHeader' => false
        ];
        return $this->render('views/content/apps/administrativeService/Requests/request-service-form.html.twig', [
            'serreq' => $serreq,
            'form' => $form->createView(),
            'pageConfigs' => $pageConfigs,
        ]);
    }

    /**
     * @param EntityManagerInterface $em
     * @return Response
     * @Route ("/{id}/delete", name="SerivceReq_Del")
     */
    public function SuppServiceRequest(EntityManagerInterface $em, ServiceRequest $serreq): Response
    {
        $em->remove($serreq);
        $em->flush();
        return $this->redirectToRoute('SerivceReq_User', [], Response::HTTP_SEE_OTHER);
    }



}
