<?php

namespace App\Repository;

use App\Entity\Logo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Logo>
 *
 * @method Logo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Logo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Logo[]    findAll()
 * @method Logo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Logo::class);
    }

    //    /**
    //     * @return Logo[] Returns an array of Logo objects
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

    //    public function findOneBySomeField($value): ?Logo
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
    public function findOneByFieldStartingWith(string $field, string $prefix): ?Logo
    {
        $qb = $this->createQueryBuilder('e');

        // Protection minimale contre les injections (on évite d'injecter directement le champ)
        if (!property_exists( $this->getEntityName(), $field)) {
            throw new \InvalidArgumentException("Invalid field: " . $field);
            }

        return $qb
            ->where("e.$field LIKE :prefix")
            ->setParameter('prefix', strtolower($prefix) . '%')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

}
