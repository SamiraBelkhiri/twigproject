<?php

namespace App\Repository;

use App\Entity\Spacedash;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Spacedash|null find($id, $lockMode = null, $lockVersion = null)
 * @method Spacedash|null findOneBy(array $criteria, array $orderBy = null)
 * @method Spacedash[]    findAll()
 * @method Spacedash[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpacedashRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Spacedash::class);
    }

    // /**
    //  * @return Spacedash[] Returns an array of Spacedash objects
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
    public function findOneBySomeField($value): ?Spacedash
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
