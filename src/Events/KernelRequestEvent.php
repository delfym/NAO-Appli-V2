<?php 

namespace App\Events;

use App\Entity\AppUsers;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Core\Exception\AuthenticationCredentialsNotFoundException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class KernelRequestEvent
{
	private $token;
	private $user;

	public function __construct(TokenStorage $token)
	{
		$this->token = $token;
	}

	public function onKernelRequest(GetResponseEvent $response)
	{   
		if (null === $this->token->getToken()) {
			return;
		}
		else
		{
			$user = $this->token->getToken()->getUser();

			if ($user instanceof AppUsers) 
			{
				if (false === $user->getIsActive()) 
				{
					$this->token->setToken(null);
				}
			}

			//dump(false === $user->getIsActive());
			//dump($user instanceof AppUsers);
			//dump($user);
		}
	}
}