<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 19/06/2018
 * Time: 17:06
 */

namespace App\Controller;

use App\Entity\AppUsers;
use App\Entity\Observation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\User\UserInterface;
use Twig\Environment;

class AdminSpaceController extends Controller
{
    private $currentUsername;
    private $currentUserId;

    /**
     * AdminSpaceController constructor.
     */
    public function __construct()
    {
        //$this->currentUsername = $this->getUser()->getUsername();
        //$this->currentUserId = $this->getUser()->getId();
        //var_dump($this->currentUsername);
        //$test = $this->getCurrentUser();
        //var_dump($test);

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

        //$currentUserId = $this->getUser()->getId();
        //$currentUsername = $this->getUser()->getUsername();
        $this->getCurrentUser();
        $obs = $this->getDoctrine()
                    ->getRepository(Observation::class);

        $observations = $obs->findByUserId($this->currentUserId, 2);
        $validatesObs = $obs->findByStatus($this->currentUserId);

        return new Response($twig->render('pages/adminSpace/adminSpace.html.twig',[
            'username' => $this->currentUsername,
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
        $this->getCurrentUser();

        $obs = $this->getDoctrine()
            ->getRepository(Observation::class);

        $observations = $obs->findByUserId($this->currentUserId);

        // $testPage = $this->getObs($currentUserId);
        //var_dump($testPage);

        return new Response($twig->render('pages/adminSpace/myObservations.html.twig',[
            'username'      => $this->currentUsername,
            'observations'  => $observations
        ]));
    }

    /**
     * @Route("/obsToValidate")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function obsToValidate(Environment $twig){

        $this->getCurrentUser();
        $obs = $this->getDoctrine()
                    ->getRepository(Observation::class);

        $observations = $obs->findByUserId($this->currentUserId, 2);
        $validatesObs = $obs->findByStatus($this->currentUserId);

        return new Response($twig->render('pages/adminSpace/obsToValidate.html.twig',[
            'username' => $this->currentUsername,
            'observations' => $observations,
            'validatesObs' => $validatesObs
        ]));
    }

    /**
     * @Route("/updateObs")
     * @return void
     */
    public function updateObs(Request $request){

        $this->getCurrentUser();
       // $this->getDoctrine()->getRepository($obsId, $this->currentUserId);

    }

    private function getCurrentUser(){
        $this->currentUserId = $this->getUser()->getId();
        $this->currentUsername = $this->getUser()->getUsername();
    }
}