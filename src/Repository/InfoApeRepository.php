<?php

namespace App\Repository;

use App\Entity\InfoApe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InfoApe>
 *
 * @method InfoApe|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfoApe|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfoApe[]    findAll()
 * @method InfoApe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfoApeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfoApe::class);
    }

    //    /**
    //     * @return InfoApe[] Returns an array of InfoApe objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('i')
    //            ->andWhere('i.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('i.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?InfoApe
    //    {
    //        return $this->createQueryBuilder('i')
    //            ->andWhere('i.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
