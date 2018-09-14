<?php 

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManagerInterface;


class BirdValidator extends ConstraintValidator
{
	private $em;

	public function __construct(EntityManagerInterface $emi)
	{
		$this->em = $emi;
	}

	public function validate($value, Constraint $constraint)
	{
		$bird = $this->em->getRepository('App:Birds')->createQueryBuilder('b')
			->select('b.nom_vernaculaire')
			->andWhere('b.nom_vernaculaire = :bird')
			->setParameter('bird', $value)
			->getQuery()
			->getResult();


		if (empty($bird)) 
		{
			$this->context->buildViolation($constraint->message)
				->addViolation(); 
		}
	}
}