<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 19/06/2018
 * Time: 17:06
 */

namespace App\Controller;


class adminSpaceController
{


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

        return new Response($twig->render('pages/adminSpace/adminSpace.html.twig',[
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

        // $testPage = $this->getObs($currentUserId);
        //var_dump($testPage);

        return new Response($twig->render('pages/adminSpace/myObservations.html.twig',[
            'username'      => $currentUsername,
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

        $currentUserId = $this->getUser()->getId();
        $currentUsername = $this->getUser()->getUsername();

        $obs = $this->getDoctrine()
            ->getRepository(Observation::class);

        $observations = $obs->findByUserId($currentUserId, 2);
        $validatesObs = $obs->findByStatus($currentUserId);

        return new Response($twig->render('pages/adminSpace/obsToValidate.html.twig',[
            'username' => $currentUsername,
            'observations' => $observations,
            'validatesObs' => $validatesObs
        ]));
    }

    /**
     * @Route("/updateObs")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function updateObs(){

    }

}