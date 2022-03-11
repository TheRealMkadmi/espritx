<?php

namespace App\Repository;

use App\Entity\ServiceRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ServiceRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServiceRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServiceRequest[]    findAll()
 * @method ServiceRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServiceRequestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServiceRequest::class);
    }

    // /**
    //  * @return ServiceRequest[] Returns an array of ServiceRequest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ServiceRequest
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findByResponseTime()
    {
        return $this->createQueryBuilder('sr')
            ->select('AVG(DATE_DIFF( sr.createdAt,sr.RespondedAt ))AS cnt')
            ->getQuery()
            ->getResult();
    }
}
