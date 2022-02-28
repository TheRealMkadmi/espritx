<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\Service1Type;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/service/api")
 */
class ServiceAPIController extends AbstractController
{
    /**
     * @Route("/show", name="app_service_a_p_i_index", methods={"GET"})
     */
    public function getServices(ServiceRepository $serviceRepository,SerializerInterface $serializer)
    {
        $services = $serviceRepository->findAll();
        $json =$serializer->serialize($services,'json',['groups'=>'Service']);
        dump($json);
        die;
    }

    /**
     * @Route("/new", name="app_service_a_p_i_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,SerializerInterface $serializer): Response
    {
        $service=$request->getContent();
        $data=$serializer->deserialize($service,Service::class,'json');
        $entityManager->persist($data);
        $entityManager->flush();
        return new Response("Service added successfully!");
    }

    /**
     * @Route("/{id}/edit", name="app_service_a_p_i_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Service $service, EntityManagerInterface $entityManager,SerializerInterface $serializer): Response
    {
        $service1=$request->getContent();
        $serializer->deserialize($service1,Service::class,'json',['object_to_populate' => $service]);
        $entityManager->persist($service);
        $entityManager->flush();
        return new Response("Service updated successfully!");
    }

    /**
     * @Route("/{id}", name="app_service_a_p_i_delete", methods={"POST"})
     */
    public function delete(Request $request, Service $service, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$service->getId(), $request->request->get('_token'))) {
            $entityManager->remove($service);
            $entityManager->flush();
        }
        return new Response("Service deleted successfully!");
    }
}
