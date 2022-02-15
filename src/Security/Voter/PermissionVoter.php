<?php

namespace App\Security\Voter;

use App\Entity\Group;
use App\Entity\User;
use App\Repository\PermissionRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Security;

class PermissionVoter implements VoterInterface
{
  private LoggerInterface $logger;
  private Security $security;
  private AccessDecisionManagerInterface $decisionManager;
  private PermissionRepository $permissionRepository;

  public function __construct(
    Security                       $security,
    LoggerInterface                $logger,
    AccessDecisionManagerInterface $decisionManager,
    PermissionRepository           $permissionRepository
  )
  {
    $this->permissionRepository = $permissionRepository;
    $this->decisionManager = $decisionManager;
    $this->security = $security;
    $this->logger = $logger;
  }

  public function vote(TokenInterface $token, $subject, array $attributes): int
  {
    // tf you're doing here?
    if (!$token->getUser() instanceof User) {
      return self::ACCESS_DENIED;
    }

    // It ain't called super admin for nothing. Heil Hitler.
    if ($this->security->isGranted(Group::ROLE_SUPER_ADMIN)) {
      return self::ACCESS_GRANTED;
    }

    // Find all stored permissions for this attribute and subject
    $permissions = $this->permissionRepository->findBy([
      'attribute' => $attributes,
      'subject' => get_class($subject),
    ]);

    // We know nothing about that subject. Shut up.
    if (count($permissions) === 0) {
      $attrs = implode(", ", $attributes);
      $this->logger->warning("Voting on ambiguous access attributes ({$attrs}) for $subject");
      return self::ACCESS_ABSTAIN;
    }

    foreach ($permissions as $permission) {
      if (!$permission->getEnabled()) {
        continue; // Sometimes we shut off the water until the plumber comes.
      }

      // if the permission has an extra expression, verify this is true, otherwise grant access directly
      // ref: https://symfony.com/doc/4.4/components/expression_language/syntax.html
      if ($permission->getExpression() !== null) {
        $allowed = $this->security->isGranted(new Expression($permission->getExpression()), $subject);
        return $allowed ? self::ACCESS_GRANTED : self::ACCESS_DENIED;
      } else {
        return self::ACCESS_GRANTED;
      }
    }
    // in any other case, deny access
    return self::ACCESS_ABSTAIN;
  }
}
