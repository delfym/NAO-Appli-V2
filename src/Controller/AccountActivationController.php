<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use \Datetime;

class AccountActivationController extends Controller
{
	/**
	 * @Route("/accountactivation/{key}")
	 */
	public function accountactivation(Request $request, $key)
	{
		if (isset($key)) 
		{
			$em = $this->getDoctrine()->getManager();

			$mailvalidation = $em->getRepository('App:AccountValidation')->createQueryBuilder('a')
			->andWhere('a.validation_key = :key')
			->setParameter('key', $key)
			->getQuery()
			->getOneOrNullResult();

			if (false === empty($mailvalidation)) 
			{
				$mailvalidation->getUser()->setMailValidationDate(new Datetime());
				$em->remove($mailvalidation);
				$em->flush();
				
				//$em->flush();

				$this->addFlash('notice', 'Votre compte a ete validé, merci de vous connecter.');
				return $this->redirectToRoute('home');
			}
			else
			{
				return $this->redirectToRoute('home');
			}
		}

		else
		{
			return $this->redirectToRoute('home');		
		}
	}
}