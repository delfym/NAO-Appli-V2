<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Twig\Environment;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SecurityController extends Controller
{

	/**
	 * @Route("/signin", name="signin")
	 */
	public function signin(Request $request, AuthenticationUtils $authenticationUtils)
	{

		if ($this->isGranted("ROLE_USER")) 
		{
			return new RedirectResponse("home");
 		}
		else
		{
         $error = $authenticationUtils->getLastAuthenticationError();
         $lastUsername = $authenticationUtils->getLastUsername();

         var_dump($this->isGranted("ROLE_USER"));

         return $this->render('pages/signin.html.twig', array(
         		'last_username' => $lastUsername,
         		'error'			=> $error,
         )); // affiche le formulaire
	    }
	}    
}

