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

    public function getCurrentUser($user){
        return $this->createQueryBuilder('o')
                    ->where('o.user = :user')
                    ->setParameter('user', $user); 
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
            ->andWhere('o.delete_date IS NULL')
            ->andWhere('user.id = :user_id')
            ->addSelect('user')
            ->setParameter('user_id', $id)
            ->orderBy('o.validation_date', 'ASC')
            //->setMaxResults($offset)
            ->getQuery();

        return $qb->getResult();
    }

    /**
     * @param $birdName
     * @return mixed
     */
    public function findByBird($birdName)
    {
        $qb = $this->createQueryBuilder('o')
            ->addSelect('o.geo_longitude')
            ->addSelect('o.geo_latitude')
            ->leftJoin('o.bird', 'b')
            ->where('b.nom_vernaculaire = :birdNameRef')
            ->addSelect('b')
            ->setParameter('birdNameRef', $birdName)
           // ->orderBy('b.nom_de_reference', 'ASC')
            //->setMaxResults($offset)
            ->getQuery();

        return $qb->getResult();
    }

    public function findAllObs() {
        return $obs = $this->createQueryBuilder('a')
                    ->where('a.validation_date IS NOT NULL')
                    ->andWhere('a.delete_date IS NULL')
                    ->andWhere('a.reason_of_delete IS NULL')
                    ->orderBy('a.post_date', 'DESC');
    }

    public function getObsToValidate(){
        return $this->createQueryBuilder('v')
                    ->where('v.validation_date IS NULL')
                    ->andWhere('v.delete_date IS NULL')
                    ->andWhere('v.reason_of_delete IS NULL')
                    ->orderBy('v.post_date', 'ASC');
}


}
