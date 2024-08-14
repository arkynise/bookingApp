<?php

namespace App\Repository;

use App\Entity\Salarie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Salarie>
 */
class SalarieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Salarie::class);
    }




    public function getEngVide()
    {
        $queryBuilder = $this->_em->createQueryBuilder();

        $queryBuilder->select('count(s.id)')
            ->from('testsiteBundle:Salarie', 's')
            ->where('s.Exclu = 0      OR   s.Exclu IS  NULL ')
            ->andWhere('s.natif  =:varEvent  ')
            ->setParameter('varEvent',"EVENTS")
            ->andWhere('s.AccordSig IS  NULL  ')

        ;

        return $queryBuilder->getQuery()
            ->getSingleScalarResult();
    }
//    /**
//     * @return Salarie[] Returns an array of Salarie objects
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

//    public function findOneBySomeField($value): ?Salarie
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
