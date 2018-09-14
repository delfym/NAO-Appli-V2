<?php

namespace App\Repository;

use App\Entity\AccountValidation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AccountValidation|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccountValidation|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccountValidation[]    findAll()
 * @method AccountValidation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountValidationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AccountValidation::class);
    }

    public function verif($key) {

        $q = $this->createQueryBuilder('a')
            ->andWhere('a.validation_key = :key')
            ->setParameter('key', $key)
            ->getQuery();

            return $q->getOneOrNullResult;
    }

}
