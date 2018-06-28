<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AdminRequestType;


class ProRequestController extends Controller
{
	/**
	 * @Route("/prorequest")
	 */
	public function prorequest(Request $request)//role user qui on un request date null ET VERIFIER SI PAS DEJA PRO
	{
		$user = $this->getUser();

			if ($user && is_null($user->getAdminRequest()) && $user->getRole() === 'ROLE_USER') //&& is ranted role user...
			{
			$form = $this->createForm(AdminRequestType::class);
			$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) 
					{
						$data = $form->getData();

							if ($data['sure'] === 'sure') 
								{
									$user->setAdminRequest(new \Datetime());

									$em = $this->getDoctrine()->getManager();
									$em->flush();

									$this->addFlash('notice', 'Votre demande a ete envoyée.');

									return $this->redirectToRoute('home');
								}
					}

				else
					{
						return  $this->render('pages/prorequest.html.twig', array(
							'form' => $form->createView()
							));
					}
			}

			else
			{
		 		return $this->redirectToRoute('home');
			}


		
	}
}