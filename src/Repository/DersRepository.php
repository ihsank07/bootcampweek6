<?php

namespace App\Repository;

use App\Entity\Ders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ders|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ders|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ders[]    findAll()
 * @method Ders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ders::class);
    }

    // /**
    //  * @return Ders[] Returns an array of Ders objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ders
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
