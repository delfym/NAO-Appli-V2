<?php 

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Doctrine\ORM\EntityManagerInterface;


class MailExistValidator extends ConstraintValidator
{
	private $em;

	public function __construct(EntityManagerInterface $em)
	{
		$this->em = $em;
	}

	public function validate($value, Constraint $constraint)
	{
		$mail = $this->em->getRepository('App:AppUsers')->createQueryBuilder('u')
			->select('u.mail')
			->andWhere('u.mail = :mail')
			->setParameter('mail', $value)
			->getQuery()
			->getResult();

	 //  var_dump($mail);


		if (empty($mail)) 
		{
			$this->context->buildViolation($constraint->message)
				->addViolation(); 
		}
	}
}