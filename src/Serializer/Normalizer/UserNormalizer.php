<?php

namespace App\Serializer\Normalizer;

use App\Entity\User;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

class UserNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{

  public function __construct(private ObjectNormalizer $normalizer,
                              private UploaderHelper   $helper)
  {
  }

  /**
   * @param User $object
   * @param $format
   * @param array $context
   * @return array
   * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
   */
  public function normalize($object, $format = null, array $context = []): array
  {
    return [
      'id' => $object->getId(),
      'first_name' => $object->getFirstName(),
      'last_name' => $object->getLastName(),
      'email' => $object->getEmail(),
      'class' => $object->getClass(),
      'userStatus' => $object->getUserStatus(),
      'groups' => array_map(static fn(\App\Entity\Group $g) => $g->getDisplayName(), $object->getGroups()->toArray()),
      'individualPermissions' => array_map(static fn(\App\Entity\Permission $g) => $g->getTitle(), $object->getIndividualPermissions()->toArray()),
      'avatarFile' => ($object->getAvatar() === null) ? $this->helper->asset($object, "avatar") : null,
      'identityType' => $object->getIdentityType(),
      'identityDocumentNumber' => $object->getIdentityDocumentNumber(),
      'phoneNumber' => $object->getPhoneNumber(),
      'plainPassword' => $object->getPlainPassword()
    ];
  }

  public function supportsNormalization($data, $format = null): bool
  {
    return $data instanceof \App\Entity\User;
  }

  public function hasCacheableSupportsMethod(): bool
  {
    return true;
  }
}
