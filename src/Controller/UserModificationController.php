<?php 

namespace App\Controller;

use App\Form\ModificationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class UserModificationController extends Controller
{
	/**
	 * @Route("/userModification")
	 */
	public function usermodification(Request $request)
	{
		    $user = $this->getUser(); 

			$form = $this->createForm(ModificationType::class, $user);

			$form->handleRequest($request);

			if ($form->isSubmitted() && $form->isValid()) 
			{
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();

			}

			return $this->render('pages/modification.html.twig', array(
			'form' => $form->createView()
			));
		
	}
}