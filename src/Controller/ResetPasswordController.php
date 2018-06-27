<?php 

namespace App\Controller;

use App\Form\ResetPasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\AppUsers;

class ResetPasswordController extends Controller
{

	/**
	 * @Route("/resetpassword/{key}")
	 */
	public function resetpassword(Request $request, UserPasswordEncoderInterface $userPasswordEncoderInterface, $key)//regex
	{
		if ($this->getUser() instanceof AppUsers) 
		{
			return $this->redirectToRoute('home');
		}
		if (isset($key))
		{  
			$em = $this->getDoctrine()->getManager();

			$forgotpassword = $em->getRepository('App:ForgotPassword')->createQueryBuilder('u')
			->andWhere('u.unique_key = :key')
			->setParameter('key', $key)
			->getQuery()
			->getOneOrNullResult();

			//var_dump($user);

			//var_dump($forgotpassword->getUser()->getFirstname());

			if (false === empty($forgotpassword)) 
			{
				 $user = $forgotpassword->getUser();
				 $form = $this->createForm(ResetPasswordType::class);
				 $form->handleRequest($request);

				 if ($form->isSubmitted() && $form->isValid()) 
				 {
				 	$data = $form->getData();

				 	$password = $userPasswordEncoderInterface->encodePassword($user, $data['password']);

				 	$user->setPassword($password);

				 	//suppression de la demande de la bdd

					//$em->detach($forgotpassword);
					$em->flush();
					//$em->detach($user);
					$em->remove($forgotpassword);
					$em->flush();

					return $this->redirectToRoute('home');
				 }
				 else
				 {
				 	return $this->render('pages/newpassword.html.twig', array(
						'form' => $form->createView()));
				 }
			}
			else
			{
				return $this->redirectToRoute('home');

			}
		}
	}
}