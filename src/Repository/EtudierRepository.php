<?php

namespace App\Repository;

use App\Entity\Etudier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Etudier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Etudier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Etudier[]    findAll()
 * @method Etudier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Etudier::class);
    }

    // /**
    //  * @return Etudier[] Returns an array of Etudier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Etudier
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
