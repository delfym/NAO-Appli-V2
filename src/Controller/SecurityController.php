<?php

namespace App\Controller;

use App\Entity\AppUsers;
use App\Entity\Observation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends Controller
{

    public function __construct()
    {
        //$this->currentUsername = $this->getUser()->getUsername();
        //$this->currentUserId = $this->getUser()->getId();
        

    }

    /**
     * @Route("/signin", name="signin")
     * @param Request $request
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function signin(Request $request, AuthenticationUtils $authenticationUtils)
    {
        if ($this->getUser() instanceof AppUsers) 
        {
            return $this->redirectToRoute('home');
        }
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('signin.html.twig', array(
            'last_username' => $lastUsername,
            'error'			=> $error,
        ));
    }



}
