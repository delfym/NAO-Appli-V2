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
				//dump($this->get('security.token_storage')->getToken()); //settoken(null)
				//invalider la session $request->getSession->invalidate ?
				//$em->remove($user);
				$em->flush();

				return $this->redirectToRoute('home');
			}
		}

		return  $this->render('pages/confirmdeletion.html.twig', array(
			'form' => $form->createView()
		));
	}
}


