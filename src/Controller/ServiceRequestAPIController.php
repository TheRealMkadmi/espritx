<?php

namespace App\Controller;

use App\Entity\Group;
use App\Entity\Service;
use App\Entity\ServiceRequest;
use App\Form\ServiceRequestType;
use App\Repository\ServiceRepository;
use App\Repository\ServiceRequestRepository;
use Doctrine\Common\Collections\ArrayCollection;
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
     * @Route("/showAll", name="app_service_request_api_index", methods={"GET"})
     */
    public function getRequests(ServiceRequestRepository $serviceRequestRepository)
    {
        $requests = $serviceRequestRepository->findAll();
        return $this->json($requests);
    }

    /**
     * @Route("/showUser", name="app_service_request_api_user", methods={"GET"})
     */
    public function getUserRequests(ServiceRequestRepository $serviceRequestRepository)
    {
        $requests = $serviceRequestRepository->findBy(["Requester"=>$this->getUser()]);
        return $this->json($requests);
    }

    /**
     * @Route("/showService", name="app_service_request_api_service", methods={"GET"})
     */
    public function getServiceRequests(ServiceRequestRepository $serviceRequestRepository,Request $request,EntityManagerInterface $entityManager)
    {
        $data = json_decode($request->getContent(), true);
        $ser=$entityManager->getRepository(Service::class)->find($data['id']);
        $requests = $serviceRequestRepository->findBy(["Type"=>$ser]);
        return $this->json($requests);
    }

    /**
     * @Route("/showGroup", name="app_service_request_api_group", methods={"GET"})
     */
    public function getGroupRequests(ServiceRepository $serviceRepository)
    {
        $requests=new ArrayCollection();
        $UserGroup = $this->getUser()->getGroups();
        for ($i=0;$i<count($UserGroup);$i++) {
            $services=$serviceRepository->findBy(["Responsible" => $this->getUser()->getGroups()[$i]]);
            for ($j=0;$j<count($services);$j++){
                $serequests=($services[$j]->getServiceRequests());
                for ($k=0;$k<count($serequests);$k++){
                    $requests->add($serequests[$k]);
                }
            }
        }
        return $this->json($requests);
    }

    /**
     * @Route("/new", name="app_service_request_api_new", methods={"GET", "POST"})
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
