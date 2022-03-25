<?php

namespace App\Serializer\Normalizer;

use App\Entity\Group;
use App\Entity\Permission;
use App\Entity\Service;
use App\Entity\User;
use Symfony\Bridge\Twig\Extension\HttpFoundationExtension;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

class GroupNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{
  public function __construct(private HttpFoundationExtension $httpFoundationExtension, private UploaderHelper $helper,)
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
      'security_title' => $object->getSecurityTitle(),
      'display_name' => $object->getDisplayName(),
      'group_type' => $object->getGroupType()->getReadable(),
      'members' => array_map(fn(User $user) => [
        'id' => $user->getId(),
        'first_name' => $user->getFirstName(),
        'last_name' => $user->getLastName(),
        'email' => $user->getEmail(),
        'class' => $user->getClass(),
        'userStatus' => $user->getUserStatus(),
        'avatarFile' => ($user->getAvatar()?->getName() !== null) ? $this->httpFoundationExtension->generateAbsoluteUrl($this->helper->asset($user, "avatarFile")) : null,
        'identityType' => $user->getIdentityType(),
        'identityDocumentNumber' => $user->getIdentityDocumentNumber(),
        'phoneNumber' => $user->getPhoneNumber(),
        'plainPassword' => $user->getPlainPassword()
      ], $object->getMembers()->toArray())
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
