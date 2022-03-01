<?php

namespace App\Serializer\Normalizer;

use App\Entity\Group;
use App\Entity\Service;
use App\Entity\User;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

class GroupNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{

  public function __construct(private ObjectNormalizer $normalizer)
  {
  }

  /**
   * @param Group $object
   * @param $format
   * @param array $context
   * @return array
   * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
   */
  public function normalize($object, $format = null, array $context = []): array
  {
    return [
      'id' => $object->getId(),
      'security_title' => $object->getDisplayName(),
      'display_name' => $object->getSecurityTitle(),
      'enjoyable_services' => array_map(static fn (Service $service) => ["id" => $service->getId(), "name" => $service->getName()], $object->getEnjoyableServices())
    ];
  }

  public function supportsNormalization($data, $format = null): bool
  {
    return $data instanceof \App\Entity\Group;
  }

  public function hasCacheableSupportsMethod(): bool
  {
    return true;
  }
}
