<?php

namespace App\Controller;

use App\Entity\ServiceRequest;
use App\Enum\AccessTypeEnum;
use App\Form\SerRequestType;
use App\Repository\ServiceRepository;
use App\Repository\ServiceRequestRepository;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Web\WebDriver;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;

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
      //$this->denyAccessUnlessGranted([AccessTypeEnum::READ], ServiceRequest::class);

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
        // $this->denyAccessUnlessGranted([AccessTypeEnum::EDIT], $serreq);
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

    /**
     * @Route ("/{id}/print", name="SerivceReq_Print")
     */
    public function PrintServiceRequest(ServiceRequest $serreq)
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $html = $this->renderView('views/content/apps/administrativeService/Requests/printable.html.twig');
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("mypdf2.pdf", [
            "Attachment" => true
        ]);
        return new Response();
    }
}
