<?php 

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;

class NonValidatedAccountEraserCommand extends Command
{
	private $em;


	public function __construct(EntityManagerInterface $em)
	{
		parent::__construct();
		$this->em = $em;
	}

	public function configure()
	{
		$this
			->setName('app:erase-nonactivated')
			->setDescription('Erase non activated accounts')
			->setHelp('Erase accounts that have not been activated within 10 hours');
	}

	public function execute(InputInterface $inputinterface, OutputInterface $outputinterface)
	{
		$date = new \Datetime();
		$accountValidation = $this->em->getRepository('App:AccountValidation')->createQueryBuilder('a')
			->andWhere("a.request_date < DATE_ADD(:date,'-5', 'hour')") //CURRENT_DATE retourne a chaque fois 00:00:00
			->setParameter('date', $date)
			->getQuery()
            ->getResult();

		dump($accountValidation);
		dump(\date("H:i:s"));


		if(false === empty($accountValidation))
		{
			foreach ($accountValidation as $key) 
			{
				$this->em->remove($key->getUser());
				$this->em->remove($key);
			}

			$this->em->flush();
		}
	}
}