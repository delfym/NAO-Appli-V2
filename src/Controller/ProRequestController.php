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
	public function prorequest(Request $request)//role user qui on un request date null
	{
		$user = $this->getUser();

		if (true === $user->getIsActive()) 
		{
			if ($user && is_null($user->getAdminRequest())) 
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

		else
		{
			   $this->get('security.token_storage')->setToken(null);
			   return $this->redirectToRoute('signin');
		}

		
	}
}