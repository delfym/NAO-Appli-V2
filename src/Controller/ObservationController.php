<?php 

namespace App\Controller;

	use App\Form\ObservationType;
	use App\Entity\Observation;
	use App\Entity\AppUsers;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Routing\Annotation\Route;
	//use App\Service\FileUploader;
	use Symfony\Component\HttpFoundation\File\UploadedFile;
	use Symfony\Component\HttpFoundation\File\File;
	use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class ObservationController extends Controller
{
    /**
     * @Route("/observForm")
     * @param Request $request
     * @param AuthorizationCheckerInterface $authChecker
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function postObservation(Request $request, AuthorizationCheckerInterface $authChecker)
	{
		$observ = new Observation();
		$form = $this->createForm(ObservationType::class, $observ);

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) 
		{
            $selectedBird = $form->get('autocomp_bird')->getData();
            $user = $this->getUser();

			$bird = $this->getDoctrine()
						 ->getRepository('App:Birds')
						 ->getBirdByRef($selectedBird);
                       
			$user->addObservation($observ);
			$bird->addObservation($observ);

			if ($authChecker->isGranted('ROLE_ADMIN')) 
			{
				$observ->setValidationDate(new \Datetime());
			}

			$file = $form->get('file')->getData();

			if (false === empty($file)) 
			{
				$fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

				$file->move(
					$this->getParameter('file_directory'),
					$fileName
				);

				$observ->setFile($fileName);
			}

            $entityManager = $this->getDoctrine()->getManager(); 
            $entityManager->persist($observ);
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('notice', 'Votre observation a bien ete postée, elle reste en attente de validation');

			return $this->redirectToRoute('home');
		}

		return  $this->render('pages/observForm.html.twig', array(
			'form' => $form->createView()
		));
	}

	private function generateUniqueFileName()
	{
		return md5(uniqid());
	}
}