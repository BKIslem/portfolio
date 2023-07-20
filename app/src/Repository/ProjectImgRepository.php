<?php

namespace App\Repository;

use App\Entity\ProjectImg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProjectImg>
 *
 * @method ProjectImg|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProjectImg|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProjectImg[]    findAll()
 * @method ProjectImg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectImgRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProjectImg::class);
    }

//    /**
//     * @return ProjectImg[] Returns an array of ProjectImg objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProjectImg
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
