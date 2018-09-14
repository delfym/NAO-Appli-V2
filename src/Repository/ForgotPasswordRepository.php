<?php

namespace App\Repository;

use App\Entity\ForgotPassword;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ForgotPassword|null find($id, $lockMode = null, $lockVersion = null)
 * @method ForgotPassword|null findOneBy(array $criteria, array $orderBy = null)
 * @method ForgotPassword[]    findAll()
 * @method ForgotPassword[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ForgotPasswordRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ForgotPassword::class);
    }

    public function checkMail($forgot){
        return $this->createQueryBuilder('f')
            ->andWhere('f.mail = :mail')
            ->setParameter('mail', $forgot)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getPass($key) {
        return  $this->createQueryBuilder('u')
                    ->andWhere('u.unique_key = :key')
                    ->setParameter('key', $key)
                    ->getQuery()
                    ->getOneOrNullResult();
    }

}
