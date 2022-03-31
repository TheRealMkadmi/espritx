<?php

namespace App\Controller;

use App\Entity\Group;
use App\Entity\Service;
use App\Entity\ServiceRequest;
use App\Form\SerRequestType;
use App\Form\ServiceRequestType;
use App\Repository\ServiceRepository;
use App\Repository\ServiceRequestRepository;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/api/request")
 */
class ServiceRequestAPIController extends AbstractApiController
{
  /**
   * @Route("/showAll", name="app_service_request_api_all", methods={"GET"})
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
    $requests = $serviceRequestRepository->findBy(["Requester" => $this->getUser()]);
    return $this->json($requests);
  }

  /**
   * @Route("/{id}/showService", name="app_service_request_api_service", methods={"GET"})
   */
  public function getServiceRequests(ServiceRequestRepository $serviceRequestRepository, Request $request, EntityManagerInterface $entityManager, $id)
  {
    $ser = $entityManager->getRepository(Service::class)->find($id);
    $requests = $serviceRequestRepository->findBy(["Type" => $ser]);
    return $this->json($requests);
  }

  /**
   * @Route("/showGroup", name="app_service_request_api_group", methods={"GET"})
   */
  public function getGroupRequests(ServiceRepository $serviceRepository)
  {
    $requests = new ArrayCollection();
    $UserGroup = $this->getUser()->getGroups();
    for ($i = 0; $i < count($UserGroup); $i++) {
      $services = $serviceRepository->findBy(["Responsible" => $this->getUser()->getGroups()[$i]]);
      for ($j = 0; $j < count($services); $j++) {
        $serequests = ($services[$j]->getServiceRequests());
        for ($k = 0; $k < count($serequests); $k++) {
          $requests->add($serequests[$k]);
        }
      }
    }
    return $this->json($requests);
  }

  /**
   * @Route("/{id}", name="app_service_request_api_one", methods={"GET"})
   */
  public function getRequest($id, ServiceRequestRepository $serviceRequestRepository)
  {
    $request = $serviceRequestRepository->findOneBy(["id" => $id]);
    return $this->json($request);
  }

  /**
   * @Route("/edit/{id}", name="app_service_request_api_edit", methods={"POST"})
   * @ParamConverter("id", class="App\Entity\ServiceRequest")
   */
  public function updateRequest(ServiceRequest $req, ServiceRepository $serviceRepository, Request $request, EntityManagerInterface $em): JsonResponse
  {
    $request->setMethod("PATCH");
    $request->request->replace(json_decode($request->request->get("Request"), true));
    $request->request->remove("Requester");
    $service = $serviceRepository->findOneBy(["Name" => $request->get("Type")])?->getId();
    $request->request->set("Type", $service);
    $request->files->replace([
      "PictureFile" => ["file" => $request->files->get("PictureFile")],
      "AttachementsFile" => ["file" => $request->files->get("AttachementsFile")]
    ]);
    $editForm = $this->get('form.factory')->createNamed('', SerRequestType::class, $req, [
      "method" => "PATCH",
    ]);

    $editForm->add('RequestResponse', TextareaType::class);
    $editForm->add('Status', ChoiceType::class, [
      'choices' => [
        'Hold' => 'processing',
        'Deny' => 'denied',
        'Done' => 'complete',
      ]
    ]);
    $editForm->handleRequest($request);
    if (!$editForm->isSubmitted() || !$editForm->isValid()) {
      if ($req->getStatus() != "unseen") {
        $req->setRespondedAt(new DateTimeImmutable());
      }
      return $this->respond($editForm, Response::HTTP_BAD_REQUEST);
    }
    $req = $editForm->getData();
    $em->flush();
    return $this->respond($user);
  }

  /**
   * @Route("/{id}/delete", name="app_service_request_api_delete", methods={"DELETE"})
   */
  public function deleteRequest($id, ServiceRequestRepository $serviceRequestRepository): JsonResponse
  {
    $req = $serviceRequestRepository->findOneBy(['id' => $id]);

    $serviceRequestRepository->removeRequest($req);

    return new JsonResponse(['status' => 'Request deleted'], Response::HTTP_NO_CONTENT);
  }

  /**
   * @Route("/add/", name="app_service_request_api_add", methods={"POST"})
   */
  public function add(Request $request, ServiceRequestRepository $serviceRequestRepository, EntityManagerInterface $entityManager): JsonResponse
  {
    $data = json_decode($request->getContent(), true);

    $Title = $data['Title'];
    $Description = $data['Description'];
    $Type = $entityManager->getRepository(Service::class)->findOneBy(["Name" => $data['Type']]);
    $Email = $data['Email'];
    $User = $this->getUser();

    if (empty($Title) || empty($Description) || empty($Type)) {
      throw new NotFoundHttpException('Expecting mandatory parameters!');
    }

    $serviceRequestRepository->saveRequest($Title, $Description, $Type, $Email, $User);

    return new JsonResponse(['status' => 'Request created!'], Response::HTTP_CREATED);
  }
  /*
  public function new(Request $request, EntityManagerInterface $entityManager,SerializerInterface $serializer): Response
  {
      $SerReq=$request->getContent();
      $data=$serializer->deserialize($SerReq,ServiceRequest::class,'json');
      $entityManager->persist($data);
      $entityManager->flush();
      return new Response("Service added successfully!");
  }


  public function edit(Request $request, ServiceRequest $serviceRequest, EntityManagerInterface $entityManager, SerializerInterface $serializer): Response
  {
      $serviceRequest1=$request->getContent();
      $serializer->deserialize($serviceRequest1,ServiceRequest::class,'json',['object_to_populate' => $serviceRequest]);
      $entityManager->persist($serviceRequest);
      $entityManager->flush();
      return new Response("Service updated successfully!");
  }


  public function delete(Request $request, ServiceRequest $serviceRequest, EntityManagerInterface $entityManager): Response
  {
      if ($this->isCsrfTokenValid('delete'.$serviceRequest->getId(), $request->request->get('_token'))) {
          $entityManager->remove($serviceRequest);
          $entityManager->flush();
      }
      return new Response("Service deleted successfully!");
  }*/
}
