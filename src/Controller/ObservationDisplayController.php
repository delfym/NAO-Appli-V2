<?php 

namespace App\Controller;


use App\Entity\Birds;
use App\Form\ObservationType;
use App\Entity\Observation;
use App\Entity\AppUsers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ObservationDisplayController extends Controller
{
    /**
     * @Route("/displayObs")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function displayObservation(Request $request)
	{
		//$observ = new Observation();
		$form = $this->createForm(ObservationType::class);
        $em = $this->getDoctrine()->getManager();

            $selectedBird = $form->get('autocomp_bird')->getData();

			$user = $this->getUser();


		return  $this->render('pages/displayObs.html.twig', [
		    'form' => $form->createView()
        ]);
	}


}