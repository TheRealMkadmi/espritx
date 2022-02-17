<?php

namespace App\Controller;

use App\Entity\Service;
use App\Repository\ServiceRepository;
use App\Form\ServiceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route ("/service")
 */
class ServiceController extends AbstractController
{
    /**
     * @Route("/", name="service")
     */
    public function Services(EntityManagerInterface $em): Response
    {

        $services = $em->getRepository(Service::class)->findAll();
        return $this->render('views/content/apps/administrativeService/serviceAffiche.html.twig',[
            'pagination'=>$services
        ]);
    }

    /**
     * @Route("/add", name="serivceAdd")
     */
    public function addService(Request $request, EntityManagerInterface $em): Response
    {
        $ser = new Service();
        $f = $this->createForm(ServiceType::class, $ser);
        $f->handleRequest($request);
        if ($f->isSubmitted() && $f->isValid()) {
            $em->persist($ser);
            $em->flush();
            return $this->redirectToRoute('service', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('views/content/apps/administrativeService/app-service-form.html.twig', [
            'form' => $f->createView(),
        ]);
    }

    /**
     * @param EntityManagerInterface $em
     * @return Response
     * @Route ("/aff", name="AffAll")
     */
    public function affServices(EntityManagerInterface $em): Response
    {

    }
}
