<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\DeletionConfirmationType;
use Symfony\Flex\Response;
use Twig\Environment;

class UnsubscribeController extends Controller
{
    /**
     * @Route("/unsubscribe")
     * @param Request $request
     * @return string
     */
	public function unsubscribe(Request $request)
	{
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY'); 		
		
		$form = $this->createForm(DeletionConfirmationType::class);
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

				$this->addFlash('notice', 'Votre demande de désinscription a été prise en compte.');

				return $this->redirectToRoute('home');
			}
		}

		return $this->render('pages/confirmdeletion.html.twig', [
			'form' => $form->createView()]
		);
	}
}



