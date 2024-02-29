<?php

namespace App\Repository;

use App\Entity\ApeFunction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ApeFunction>
 *
 * @method ApeFunction|null find($id, $lockMode = null, $lockVersion = null)
 * @method ApeFunction|null findOneBy(array $criteria, array $orderBy = null)
 * @method ApeFunction[]    findAll()
 * @method ApeFunction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApeFunctionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ApeFunction::class);
    }

    //    /**
    //     * @return ApeFunction[] Returns an array of ApeFunction objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ApeFunction
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
