<?php

namespace App\Repository;

use App\Entity\Lector;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lectors>
 *
 * @method Lectors|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lectors|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lectors[]    findAll()
 * @method Lectors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LectorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lector::class);
    }

    //    /**
    //     * @return Lectors[] Returns an array of Lectors objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Lectors
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
