<?php

namespace App\Controller;

use App\Entity\ServiceRequest;
use App\Form\ServiceRequestType;
use App\Repository\ServiceRequestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/api/request")
 */
class ServiceRequestAPIController extends AbstractApiController
{
    /**
     * @Route("/", name="app_service_request_api_index", methods={"GET"})
     */
    public function getRequests(ServiceRequestRepository $serviceRequestRepository,SerializerInterface $serializer)
    {
        $services = $serviceRequestRepository->findAll();
        $json =$serializer->serialize($services,'json',['groups'=>'Request']);
        dump($json);
        die;
    }

    /**
     * @Route("/new", name="app_service_request_a_p_i_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,SerializerInterface $serializer): Response
    {
        $SerReq=$request->getContent();
        $data=$serializer->deserialize($SerReq,ServiceRequest::class,'json');
        $entityManager->persist($data);
        $entityManager->flush();
        return new Response("Service added successfully!");
    }

    /**
     * @Route("/{id}/edit", name="app_service_request_a_p_i_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ServiceRequest $serviceRequest, EntityManagerInterface $entityManager, SerializerInterface $serializer): Response
    {
        $serviceRequest1=$request->getContent();
        $serializer->deserialize($serviceRequest1,ServiceRequest::class,'json',['object_to_populate' => $serviceRequest]);
        $entityManager->persist($serviceRequest);
        $entityManager->flush();
        return new Response("Service updated successfully!");
    }

    /**
     * @Route("/{id}", name="app_service_request_a_p_i_delete", methods={"POST"})
     */
    public function delete(Request $request, ServiceRequest $serviceRequest, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$serviceRequest->getId(), $request->request->get('_token'))) {
            $entityManager->remove($serviceRequest);
            $entityManager->flush();
        }
        return new Response("Service deleted successfully!");
    }
}
