<?php 

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\ORM\EntityManagerInterface;

class ForgetPasswordEraserCommand extends Command
{
	private $em;

	public function __construct(EntityManagerInterface $em)
	{
		parent::__construct();
		$this->em = $em;
	}

	protected function configure()
	{
		$this
			->setName('app:erase-forgotpassword')
			->setDescription('Erase all the forget password entities that are older than 5 hours')
			->setHelp('Erase the forget password entities older than 5 hours');
	}

	protected function execute(InputInterface $inputinterface, OutputInterface $outputinterface)
	{
		$outputinterface->writeLn('Test');

		$oldForgetPassword = $this->em->getRepository('App:ForgotPassword')->createQueryBuilder('p')
			->andWhere("p.request_date < DATE_ADD(CURRENT_DATE(),'-5', 'hour')")
			->getQuery()
			->getResult(); //Ecrire directement en DQL ?

		if (false === empty($oldForgetPassword)) 
		{
			foreach ($oldForgetPassword as $key) 
			{
				$this->em->remove($key);
			}	
		  $this->em->flush();	
		}

		//var_dump($oldForgetPassword);
	}
}