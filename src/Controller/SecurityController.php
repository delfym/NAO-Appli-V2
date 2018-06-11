<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Twig\Environment;


class SecurityController extends Controller
{

	/**
	 * @Route("/signin", name="signin")
	 */
	public function signin(Request $request, AuthenticationUtils $authenticationUtils)
	{
         $error = $authenticationUtils->getLastAuthenticationError();
         $lastUsername = $authenticationUtils->getLastUsername();

         return $this->render('signin.html.twig', array(
         		'last_username' => $lastUsername,
         		'error'			=> $error,
         ));
	}


    /**
     * @Route("/adminSpace")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function adminSpace(Environment $twig){
        $username = $this->getUser()->getUsername();
        return new Response($twig->render('pages/adminSpace.html.twig',[
            'username' => $username
        ]));
    }
}


