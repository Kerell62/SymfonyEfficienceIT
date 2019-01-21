<?php

namespace App\Repository;

use App\Entity\MailTo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MailTo|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailTo|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailTo[]    findAll()
 * @method MailTo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailToRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MailTo::class);
    }

    // /**
    //  * @return MailTo[] Returns an array of MailTo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MailTo
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
