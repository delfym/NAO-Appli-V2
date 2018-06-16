<?php 

namespace App\Controller;

use App\Entity\ForgotPassword;
use App\Form\ForgotPasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
//use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ForgotPasswordController extends Controller
{

	private $mailer;

	public function __construct(\Swift_Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

	/**
	 * @Route("/forgotpassword")
	 */
	public function forgotpassword(Request $request)//verifier si non connecté
	{
		$forgot = new ForgotPassword();
		$form = $this->createForm(ForgotPasswordType::class, $forgot);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) 
		{
			$em = $this->getDoctrine()->getManager();

			//VERIFIER SI DEMANDE PAS DEJA PRESENTE EN BDD SI EXISTE RENVOI MAIL

			$alreadyexist = $em->getRepository('App:ForgotPassword')->createQueryBuilder('f')
				->andWhere('f.mail = :mail')
				->setParameter('mail', $forgot->getMail())
				->getQuery()
				->getOneOrNullResult();

			if (false === empty($alreadyexist)) 
			{
				$message = (new \Swift_Message("Test"))
				->setFrom('palmino.angelo@gmail.com')
				->setTo($alreadyexist->getMail())
				->addPart("Merci de bien voiloir cliquer sur ce lien pour changer votre mot de passe http://nao.local/index.php/resetpassword/".$alreadyexist->getUniqueKey());

			  $this->mailer->send($message);

				// return ....
			}
			else
			{
			 $user = $em->getRepository('App:AppUsers')->createQueryBuilder('u')
				->andWhere('u.mail = :mail')
				->setParameter('mail', $forgot->getMail())
				->getQuery()
				->getOneOrNullResult();

			 $forgot->setUniqueKey(uniqid()); //uniqueid très leger
			 $forgot->setUser($user);//mettre entité user dans forgot

			 $entityManager = $this->getDoctrine()->getManager();
			 $entityManager->persist($forgot);
			 $entityManager->flush();

			 var_dump($forgot);

			 $message = (new \Swift_Message("Test"))
				->setFrom('palmino.angelo@gmail.com')
				->setTo($forgot->getMail())
				->addPart("Merci de bien voiloir cliquer sur ce lien pour changer votre mot de passe http://nao.local/index.php/resetpassword/".$forgot->getUniqueKey());

			  $this->mailer->send($message);
			}

			//lien bidirectionnel avec l'user ? 

			//generation du lien avec l'unique id + envoi mail

		}

		return $this->render('pages/forgotpassword.html.twig', array(
			'form' => $form->createView()
		));
	}
}