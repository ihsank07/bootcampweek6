<?php

namespace App\Repository;

use App\Entity\Ogrenci;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ogrenci|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ogrenci|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ogrenci[]    findAll()
 * @method Ogrenci[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OgrenciRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ogrenci::class);
    }

    // /**
    //  * @return Ogrenci[] Returns an array of Ogrenci objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ogrenci
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
