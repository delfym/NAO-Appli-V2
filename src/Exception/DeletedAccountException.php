<?php 

namespace App\Exception;

use Symfony\Component\Security\Core\Exception\AccountStatusException;

class DeletedAccountException extends AccountStatusException
{
	public function getMessageKey()
	{
		return 'Ce compte n\'existe pas' ;
	}
}