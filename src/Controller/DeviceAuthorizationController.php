<?php

namespace App\Controller;

use App\Entity\DeviceAuthorization;
use App\Repository\DeviceAuthorizationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class DeviceAuthorizationController extends AbstractApiController
{
  /**
   * @Route("/authenticate_device/{device_code}", name="device_authenticate", methods={"GET"})
   */
  public function authenticate_device($device_code, DeviceAuthorizationRepository $repository, EntityManagerInterface $entityManager)
  {
    $code = $repository->findOneBy(['device_code' => $device_code]);
    if(!$code) {
      return new NotFoundHttpException();
    }
    $code->setUser($this->getUser());
    $entityManager->persist($code);
    $entityManager->flush();
    return new Response("You have successfully authenticated your device. You can close this tab now.", Response::HTTP_OK);
  }


  /**
   * @Route("/authenticate_device/start", name="start_device_authentication", methods={"POST"})
   * @throws \Exception
   */
  public function start_device_authentication(Request $request, EntityManagerInterface $entityManager)
  {
    $device_auth_code = bin2hex(random_bytes(16));
    $authorization = new DeviceAuthorization();
    $authorization->setDeviceCode($device_auth_code);
    $entityManager->persist($authorization);
    $entityManager->flush();
    return new JsonResponse(["code" => $device_auth_code]);
  }
}