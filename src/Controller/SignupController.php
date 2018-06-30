<?php 

namespace App\Controller;

use App\Form\SignupType;
use App\Entity\AppUsers;
use App\Entity\AccountValidation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SignupController extends Controller
{
	private $mailer;

	public function __construct(\Swift_Mailer $mailer)
	{
		$this->mailer = $mailer;
	}

    /**
     * @Route("/signup")
     * @param Request $request
     * @param UserPasswordEncoderInterface $userPasswordEncoderInterface
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
	public function signup(Request $request, UserPasswordEncoderInterface $userPasswordEncoderInterface) // a ameliorer avec gestion access avant et apres POST
	{
		if ($this->getUser() instanceof AppUsers) 
		{
			return $this->redirectToRoute('home');
		}

		$user = new AppUsers();
		$form = $this->createForm(SignupType::class, $user);

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) 
		{
			$password = $userPasswordEncoderInterface->encodePassword($user, $user->getPassword());
			$user->setPassword($password);

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($user);

			//new accountvalidation ...

			$accountvalidation = new AccountValidation(); // faire lien dans constructeur user ?
			$accountvalidation->setUser($user);
			$accountvalidation->setValidationKey(uniqid()); // directement dans le constructeur de l'entité?
			$accountvalidation->setMail($user->getMail()); //pas très utile vu que l'on a un lien onetoone unidir

			$entityManager->persist($accountvalidation);
			
			//envoi du mail avec lien generé
			//passe l'entite user a l'entite accountvalidation
			$entityManager->flush();

			$message = (new \Swift_Message("Activation de votre compte NAO"))
				->setFrom('palmino.angelo@gmail.com')
				->setTo($user->getMail())
				->addPart("Merci de bien vouloir cliquer sur ce lien pour activer votre compte http://nao.local/index.php/accountactivation/".$accountvalidation->getValidationKey());

			  $this->mailer->send($message);

			 $this->addFlash('notice', 'Votre compte à ete créé, merci de bien vouloir l\'activer en cliquant sur le lien que vous avez recu par mail');

			return $this->redirectToRoute('home');
		}

		return $this->render('pages/signup.html.twig', array(
			'form' => $form->createView()
		));
		
	}
}


 