<?php 

namespace App\Exception;

use Symfony\Component\Security\Core\Exception\AccountStatusException;

class AccountUnvalidatedException extends AccountStatusException
{
	public function getMessageKey()
	{
		return 'Votre compte n\'a pas ete validé';
	}
}