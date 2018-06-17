<?php

namespace App\Controller;

use App\Entity\AppUsers;
use App\Entity\Observation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Twig\Environment;


class SecurityController extends Controller
{
    private $currentUsername;
    private $currentUserId;

    public function __construct()
    {
        //$this->currentUsername = $this->getUser()->getUsername();
        //$this->currentUserId = $this->getUser()->getId();
        //var_dump($this);

    }

    /**
     * @Route("/signin", name="signin")
     * @param Request $request
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
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

        $currentUserId = $this->getUser()->getId();
        $currentUsername = $this->getUser()->getUsername();

        $obs = $this->getDoctrine()
                    ->getRepository(Observation::class);

        $observations = $obs->findByUserId($currentUserId, 2);
        $validatesObs = $obs->findByStatus($currentUserId);

        //  var_dump($validatesObs);

        return new Response($twig->render('pages/adminSpace.html.twig',[
            'username' => $currentUsername,
            'observations' => $observations,
            'validatesObs' => $validatesObs
        ]));
    }

    /**
     * @Route("/myObservations")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function myObservations(Environment $twig){
        $currentUserId = $this->getUser()->getId();
        $currentUsername = $this->getUser()->getUsername();

        $obs = $this->getDoctrine()
                    ->getRepository(Observation::class);

        $observations = $obs->findByUserId($currentUserId);

        return new Response($twig->render('pages/adminSpace/myObservations.html.twig',[
            'username'      => $currentUsername,
            'observations'  => $observations
        ]));
    }


}
