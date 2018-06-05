<?php 

namespace App\Controller;


use App\Form\ObservationType;
use App\Entity\Observation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ObservationController extends Controller
{
	/**
	 * @Route("/observForm")
	 */
	public function postObservation(Request $request)
	{
		$observ = new Observation();
		$form = $this->createForm(ObservationType::class, $observ);

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) 
		{
			var_dump($observ);
			return $this->redirectToRoute('home');
		}

		return  $this->render('pages/observForm.html.twig', array(
			'form' => $form->createView()
		));
	}
}