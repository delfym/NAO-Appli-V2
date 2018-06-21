<?php

namespace App\Repository;

use App\Entity\Observation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Observation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Observation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Observation[]    findAll()
 * @method Observation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObservationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Observation::class);
    }

    public function findByUserId($id, $offset = null)
    {
        $qb = $this->createQueryBuilder('o')
            ->leftJoin('o.user', 'user')
            ->addSelect('user')
            ->andWhere('user.id = :user_id')
            ->setParameter('user_id', $id)
            ->orderBy('o.post_date', 'ASC')
            ->setMaxResults($offset)
            ->getQuery();

        return $qb->getResult();
    }

    /**
     * @param $id
     * @param int $first_result
     * @param int $max_results
     * @return Paginator
     */
    public function getObs($id, $first_result = 0, $max_results = 20)
    {
        $qb = $this->createQueryBuilder('o')
            ->leftJoin('o.user', 'user')
            ->addSelect('user')
            ->andWhere('user.id = :user_id')
            ->setParameter('user_id', $id)
            ->orderBy('o.post_date', 'ASC')
            ->setFirstResult($first_result)
            ->setMaxResults($max_results);
        return $qb->getQuery()->getResult();

     //   $pag = new Paginator($qb);
//var_dump($pag);
  //      $nbPages = $pag->count();
    //    return $pag;
    }

    /**
     * @param $id
     * @param null $offset
     * @return mixed
     */
    public function findByStatus($id, $offset = null)
    {
        $qb = $this->createQueryBuilder('o')
            ->leftJoin('o.user', 'user')
            ->where('o.validation_date IS NULL')
            ->andWhere('user.id = :user_id')
            ->addSelect('user')
            ->setParameter('user_id', $id)
            ->orderBy('o.validation_date', 'ASC')
            //->setMaxResults($offset)
            ->getQuery();

        return $qb->getResult();
    }

    // A supprimer
    public function updateObservation($obsId, $userId)
    {
        $today = new \DateTime('now');
        $this->createQueryBuilder(Observation::class, 'o')
            ->update(Observation::class, 'o')
            ->leftJoin('o.user', 'user')
            ->where('o.obsId = :obsId')
            ->andWhere('user.id = :user_id')
            ->addSelect('user')
            ->setParameter('user_id', $userId)
            ->setParameter('obsId', $obsId)
            ->set('o.validation_date', $today)
            ->getQuery()
            ->execute()
        ;
    }

}
//    /**
//     * @return Observation[] Returns an array of Observation objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Observation
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /*
     *
    public function findByStatus($id, $offset=null)
    {
        $qb = $this->createQueryBuilder('o')
            ->leftJoin('o.user', 'user')
            ->where('o.validation_date IS NULL')
            ->andWhere('user.id = :user_id')
            ->addSelect('user')
            ->setParameter('user_id', $id)
            ->orderBy('o.validation_date', 'ASC')
            ->setMaxResults($offset)
            ->getQuery()
        ;
        return $qb->getResult();
    }

}
*/