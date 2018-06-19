<?php 

namespace App\Security;

use App\Exception\AccountUnvalidatedException;
use App\Entity\AppUsers as AppUser;
//use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
	public function checkPreAuth(UserInterface $user)
	{
		dump($user); //retourne entité user

		dump($user->getRoles());

		dump($user instanceof AppUser); //true

		dump($user->getMailValidationDate());

		if (!$user instanceof AppUser) 
		{
			return;
		}

		if ($user->getMailValidationDate() === null) 
		{
			throw new AccountUnvalidatedException();
			
		}


	}

	public function checkPostAuth(UserInterface $user)
	{

	}
}