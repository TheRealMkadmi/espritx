<?php

namespace App\Controller;

use App\Entity\Service;
use App\Repository\ServiceRepository;
use App\Form\ServiceType;
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
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

    /**
     * @Route("/add", name="serivceAdd")
     */
    public function addService(Request $request):Response
    {
        $ser = new Service();
        $f = $this->createForm(ServiceType::class,$ser);
        $f->handleRequest($request);
        return $this->render('service/AddService.html.twig', [
            'form'=>$f->createView(),
        ]);
    }
}
