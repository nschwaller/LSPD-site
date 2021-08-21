<?php

namespace App\Repository;

use App\Entity\Arrestation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Arrestation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Arrestation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Arrestation[]    findAll()
 * @method Arrestation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArrestationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Arrestation::class);
    }

    // /**
    //  * @return Arrestation[] Returns an array of Arrestation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Arrestation
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
