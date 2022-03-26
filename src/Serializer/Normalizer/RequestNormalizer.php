<?php

namespace App\Serializer\Normalizer;

use App\Entity\Group;
use App\Entity\ServiceRequest;
use App\Entity\Service;
use App\Entity\User;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

class RequestNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{

  public function __construct(private ObjectNormalizer  $normalizer,
                              private UploaderHelper    $helper,
                              private UserNormalizer    $userNormalizer)
  {
  }

  /**
   * @param ServiceRequest $request
   * @param $format
   * @param array $context
   * @return array
   * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
   */
  public function normalize($request, $format = null, array $context = []): array
  {
    return [
      'id' => $request->getId(),
      'CreatedAt' => $request->getCreatedAt()->format('Y-m-d\TH:m:s.u'),
      'UpdatedAt' => $request->getUpdatedAt()->format('Y-m-d\TH:m:s.u'),
      'RespondedAt' => $request->getRespondedAt()?->format('Y-m-d\TH:m:s.u'),
      'Title' => $request->getTitle(),
      'Description' => $request->getDescription(),
      'Type' => [
        'id' => $request->getType()->getId(),
        'Name' => $request->getType()->getName()
      ],
      'Status' => $request->getStatus(),
      'Response' => $request->getRequestResponse(),
      'Picture' => $request->getPicture(),
      'Attachements' => $request->getAttachements(),
      'Email' => $request->getEmail(),
      'Requester' => $this->userNormalizer->normalize($request->getRequester()),
    ];
  }

  public function supportsNormalization($data, $format = null): bool
  {
    return $data instanceof \App\Entity\ServiceRequest;
  }

  public function hasCacheableSupportsMethod(): bool
  {
    return true;
  }
}
