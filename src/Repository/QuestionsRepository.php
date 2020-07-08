<?php

namespace App\Repository;

use App\Entity\Questions;
use App\Entity\Responses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * @method Questions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Questions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Questions[]    findAll()
 * @method Questions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Questions::class);
    }


    public function findById($params)
    {
         $qb =  $this->createQueryBuilder('b')
             ->select("
                 b.id,
                 b.response_1,
                 b.response_2,
                 b.response_3,
                 b.response_4,")
             ->where("b.id = :id")
             ->setParameters($params)
             ->getQuery();

        //  $qb =  $this->createQueryBuilder('b')
        //  ->addSelect('o')
        // ->select("*")
        // ->innerJoin('App\Entity\Responses', 'o',   Expr\Join::WITH,  'b.id = o.id')
        //  ->setParameters()
        // ->getQuery();

 
    }
   


    // /**
    //  * @return Questions[] Returns an array of Questions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Questions
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
