<?php

namespace App\Repository;

use App\Entity\ConversationThread;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConversationThread|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConversationThread|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConversationThread[]    findAll()
 * @method ConversationThread[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConversationThreadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConversationThread::class);
    }

    // /**
    //  * @return ConversationThread[] Returns an array of ConversationThread objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ConversationThread
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function countallConver()
    {
        return $this->createQueryBuilder('c')
            ->select('count(c.id)')
        ->getQuery()
        ->getSingleScalarResult();
}
}
