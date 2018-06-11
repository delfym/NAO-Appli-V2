<?php 

namespace App\Controller;


use App\Form\ObservationType;
use App\Entity\Observation;
use App\Entity\AppUsers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ObservationController extends Controller
{
	/**
	 * @Route("/observForm")
	 */
	public function postObservation(Request $request)
	{
		$observ = new Observation();
		$form = $this->createForm(ObservationType::class, $observ);

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) 
		{
            $selectedBird = $form->get('autocomp_bird')->getData();

            //$this->getUser()->addObservation($observ);

            //recuperer l'entité oiseau pour lui assigner l'observation via addObservation() pareil pour user()

            //$user = new AppUsers();
            //var_dump($this->getUser() instanceof $user); //retourne true

			$user = $this->getUser();

			$bird = $this->getDoctrine()->getRepository('App:Birds')->createQueryBuilder('b')
			->andWhere('b.nom_de_reference = :bird')
			->setParameter('bird', $selectedBird)
			->getQuery()
			->getOneOrNullResult();
			//->getResult();

			$user->addObservation($observ);
			$bird->addObservation($observ);

            $entityManager = $this->getDoctrine()->getManager(); 
            $entityManager->persist($observ);
            //$entityManager->persist($bird);
            $entityManager->persist($user);
            $entityManager->flush();

            var_dump($observ->getId());

			//return $this->redirectToRoute('home');
		}

		return  $this->render('pages/observForm.html.twig', array(
			'form' => $form->createView()
		));
	}
}