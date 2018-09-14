<?php

namespace App\Repository;

use App\Entity\Birds;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Birds|null find($id, $lockMode = null, $lockVersion = null)
 * @method Birds|null findOneBy(array $criteria, array $orderBy = null)
 * @method Birds[]    findAll()
 * @method Birds[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BirdsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Birds::class);
    }

    /**
     * @param $birdName
     * @return mixed
     * @throws NonUniqueResultException
     */
    public function findByBirdName($birdName)
    {
        $qb = $this ->createQueryBuilder('b')
                    ->where('b.nom_vernaculaire = :birdNameRef')
                    ->setParameter('birdNameRef', $birdName)
                    ->getQuery();
        return $qb->getArrayResult();
    }

    public function getBirdsByrefName($term, $maxRows){
        return $this->createQueryBuilder('b')
                    ->select('b.nom_vernaculaire')
                    ->andWhere('b.nom_vernaculaire LIKE :bird')
                    ->setParameter('bird', '%'.$term.'%')
                    ->setMaxResults($maxRows)
                    ->getQuery()
                    ->getResult();
    }
    
    public function getBirdByRef($selectedBird){
         return $this   ->createQueryBuilder('b')
                        ->andWhere('b.nom_vernaculaire = :bird')
                        ->setParameter('bird', $selectedBird)
                        ->getQuery()
                        ->getOneOrNullResult();    
    }
}