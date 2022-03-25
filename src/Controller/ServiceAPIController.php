<?php

namespace App\Controller;

use App\Entity\Group;
use App\Entity\Service;
use App\Form\Service1Type;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/api/service")
 */
class ServiceAPIController extends AbstractApiController
{
    /**
     * @Route("/show", name="app_service_a_p_i_index", methods={"GET"})
     */
    public function getServices(ServiceRepository $serviceRepository,SerializerInterface $serializer)
    {
        $services = $serviceRepository->findAll();
        return $this->json($services);
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

    /**
     * @Route("/add/", name="add_api_service", methods={"POST"})
     */
    public function add(Request $request,ServiceRepository $repository, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $Name = $data['Name'];
        $Responsible = $entityManager->getRepository(Group::class)->find($data['Responsible']['id']);
        $Recipients = $data['Recipient'];

        if (empty($Name) || empty($Responsible) || empty($Recipients)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        $repository->saveService($Name, $Responsible, $Recipients);

        return new JsonResponse(['status' => 'Service created!'], Response::HTTP_CREATED);
    }
}
