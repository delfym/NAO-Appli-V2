<?php 

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ForgetPasswordEraserCommand extends Command
{
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
	}
}