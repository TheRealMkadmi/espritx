<?php

namespace App\Repository;

use App\Entity\GroupPost;
use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GroupPost|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupPost|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupPost[]    findAll()
 * @method GroupPost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroupPostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupPost::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(GroupPost $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(GroupPost $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return GroupPost[] Returns an array of GroupPost objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GroupPost
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function changeValiditeG(GroupPost $groupPost){
        $em=$this->getEntityManager();
        if ($groupPost->isValid())
            $groupPost->setIsValid(false);
        else
            $groupPost->setIsValid(true);
        $em->persist($groupPost);
        $em->flush();
        return $groupPost;
    }




}
