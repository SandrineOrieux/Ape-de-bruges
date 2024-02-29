<?php

namespace App\Repository;

use App\Entity\TitleEvent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TitleEvent>
 *
 * @method TitleEvent|null find($id, $lockMode = null, $lockVersion = null)
 * @method TitleEvent|null findOneBy(array $criteria, array $orderBy = null)
 * @method TitleEvent[]    findAll()
 * @method TitleEvent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TitleEventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TitleEvent::class);
    }

    //    /**
    //     * @return TitleEvent[] Returns an array of TitleEvent objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?TitleEvent
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
