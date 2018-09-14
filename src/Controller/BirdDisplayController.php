<?php

namespace App\Controller;


use App\Entity\Birds;
use App\Form\ObservationType;
use App\Entity\Observation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;

class BirdDisplayController extends Controller
{
    /**
     * @Route("/displayObs")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function displayObservation(Request $request)
    {
        $form = $this->createForm(ObservationType::class);
        $em =   $this->getDoctrine()->getManager();

        $selectedBird = $form->get('autocomp_bird')->getData();

        if ($request->isMethod('POST')
            && $form->handleRequest($request)
                    ->isValid()) {
        }
        $form->handleRequest($request);
        $obs = $em->getRepository(Observation::class);

        return $this->render('pages/displayObs.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/displayBird")
     * @param Request $request
     * @return JsonResponse
     */
    public function getOneBird(Request $request)
    {
        if ($request->isXmlHttpRequest()) {

            $birdRef = htmlspecialchars($_POST['birdRefName']);

            $em = $this->getDoctrine()
                       ->getManager();
            $birdInfos = $em->getRepository(Birds::class)
                            ->findByBirdName($birdRef);

            return new JsonResponse($birdInfos);
        }
    }


}