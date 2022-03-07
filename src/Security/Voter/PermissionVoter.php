<?php

namespace App\Security\Voter;

use App\Entity\Group;
use App\Entity\Permission;
use App\Entity\User;
use App\Enum\GroupType;
use App\Repository\PermissionRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Security;

class PermissionVoter implements VoterInterface
{

  public function __construct(
    private Security                       $security,
    private LoggerInterface                $logger,
    private AccessDecisionManagerInterface $decisionManager,
    private PermissionRepository           $permissionRepository
  )
  {
  }

  public function vote(TokenInterface $token, $subject, array $attributes): int
  {
    // tf you're doing here?
    /** @var User $user */
    $user = $token->getUser();
    if (!$user instanceof User) {
      return self::ACCESS_DENIED;
    }
    if ($user->isPartOfGroupType(GroupType::SUPER_ADMIN())) {
      // It ain't called super admin for nothing. Heil Hitler.
      return self::ACCESS_GRANTED;
    }

    if(is_string($subject)){
      $applicable_permissions = array_filter($user->getAggregatePermissions(),
        static fn(Permission $p) =>
          $p->getSubject() === $subject &&
          in_array($p->getAttribute(), $attributes, true)
      );
    }
    else {
      $applicable_permissions = array_filter($user->getAggregatePermissions(),
        static fn(Permission $p) =>
          $p->getSubject() === get_class($subject) &&
          in_array($p->getAttribute(), $attributes, true)
      );
    }

    // We know nothing about that subject. Shut up.
    if (count($applicable_permissions) === 0) {
      $attrs = implode(", ", $attributes);
      $this->logger->warning("Voting on ambiguous access attributes ({$attrs}) for $subject");
      return self::ACCESS_ABSTAIN;
    }

    foreach ($applicable_permissions as $permission) {
      if (!$permission->getEnabled()) {
        continue; // Sometimes we shut off the water until the plumber comes.
      }
      // if the permission has an extra expression, verify this is true, otherwise grant access directly
      // ref: https://symfony.com/doc/4.4/components/expression_language/syntax.html
      if (!is_string($subject) && $permission->getExpression() !== null) {
        $allowed = $this->security->isGranted(new Expression($permission->getExpression()), $subject);
        return $allowed ? self::ACCESS_GRANTED : self::ACCESS_DENIED;
      }
      return self::ACCESS_GRANTED;
    }
    // in any other case, deny access
    return self::ACCESS_ABSTAIN;
  }}
