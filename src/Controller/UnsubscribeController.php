<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\DeletionConfirmationType;

class UnsubscribeController extends Controller
{
	/**
	 * @Route("/unsubscribe")
	 */
	public function unsubscribe(Request $request)
	{
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY'); 		
		
		$form = $this->createForm(DeletionConfirmationtype::class);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) 
		{
			$data = $form->getData();

			if ($data['confirm'] === 'confirm') 
			{
				$user = $this->getUser();

				$em = $this->getDoctrine()->getManager();
				$user->setMail(null);
				$user->setFirstName(null);
				$user->setLastname(null);
				$user->setIsActive(false);
				$this->get('security.token_storage')->setToken(null);
				//invalider la session $request->getSession->invalidate ?
				//$em->remove($user);
				$em->flush();

				$this->addFlash('notice', 'Votre demande de desinscription a ete prise en compte');

				return $this->redirectToRoute('home');
			}
		}

		return  $this->render('pages/confirmdeletion.html.twig', array(
			'form' => $form->createView()
		));
	}
}



