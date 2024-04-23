<?php

namespace App\Repository;

use App\Entity\Subregion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Subregion>
 *
 * @method Subregion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subregion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subregion[]    findAll()
 * @method Subregion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubregionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subregion::class);
    }

    //    /**
    //     * @return Subregion[] Returns an array of Subregion objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Subregion
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
