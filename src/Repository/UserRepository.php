<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
  public function __construct(ManagerRegistry $registry)
  {
    parent::__construct($registry, User::class);
  }

  public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
  {
    if (!$user instanceof User) {
      throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
    }
    $user->setPassword($newEncodedPassword);
    $this->_em->persist($user);
    $this->_em->flush();
  }

  public function getCountByStatus()
  {
    $res = $this->createQueryBuilder('u')
      ->groupBy("u.userStatus")
      ->select("u.userStatus as status, COUNT(u) as cnt")
      ->getQuery()
      ->getResult();
    $ret = [];
    foreach ($res as $user_status) {
      $ret[strtolower((string)$user_status["status"])] = $user_status["cnt"];
    }
    $ret["total"] = array_sum(array_values($ret));
    return $ret;
  }

  /**
   * @param User $user1
   * @param User $user2
   * @return User[]
   */
  public function getCommonContacts(User $user1, User $user2): array
  {
    return array_intersect($user1->getContacts()->toArray(), $user2->getContacts()->toArray());
  }

  public function makeFriendSuggestions(User $user){
    $pool = [];
    foreach ($user->getGroups() as $group){
      $pool = array_merge($group->getMembers()->toArray(), $pool);
    }
    return $pool;
  }
}