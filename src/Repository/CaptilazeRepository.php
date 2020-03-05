<?php

namespace App\Repository;

use App\Entity\Captilaze;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Captilaze|null find($id, $lockMode = null, $lockVersion = null)
 * @method Captilaze|null findOneBy(array $criteria, array $orderBy = null)
 * @method Captilaze[]    findAll()
 * @method Captilaze[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaptilazeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Captilaze::class);
    }

    // /**
    //  * @return Captilaze[] Returns an array of Captilaze objects
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
    public function findOneBySomeField($value): ?Captilaze
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
