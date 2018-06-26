<?php 

namespace App\Controller;


use App\Entity\Birds;
use App\Form\ObservationType;
use App\Entity\Observation;
use App\Entity\AppUsers;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ObservationDisplayController extends Controller
{
    /**
     * @Route("/displayObs")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function displayObservation(Request $request)
	{
		$form = $this->createForm(ObservationType::class);
        $em = $this->getDoctrine()->getManager();

            $selectedBird = $form->get('autocomp_bird')->getData();

			//$user = $this->getUser();
			//récupérer l'id de l'obs saisie grace à ajax

        if ($request->isMethod('POST')
            && $form->handleRequest($request)
                ->isValid()) {

        }
        $form->handleRequest($request);
        $obs = $em->getRepository(Observation::class);


		return  $this->render('pages/displayObs.html.twig', [
		    'form' => $form->createView()
        ]);
	}

    /**
     * @Route("/recupObs")
     * @param Request $request
     * @return JsonResponse
     */
    public function getObs(Request $request){
        //prévoir le cas d'une observation déjà validée?

        if ($request->isXmlHttpRequest()) {
            $obsId = htmlspecialchars($_POST['obsId']);
            $em = $this->getDoctrine()
                ->getManager();

            $obsToUpdate = $em->getRepository(Observation::class)
                ->find($obsId);
            $obsToUpdate->setValidationDate(new \DateTime());
            $em->flush();
            return new JsonResponse(null,200);
        }
        return new JsonResponse(null,500);  //envoyer un message d'erreur?
    }

    /**
     * @Route("/displayRef")
     * @param Request $request
     * @return JsonResponse
     */
    public function getObsbyBird(Request $request){
        if($request->isXmlHttpRequest()) {

        $birdRef = htmlspecialchars($_POST['birdRefName']);

        $em = $this->getDoctrine()->getManager();
        $birdsObservations = $em->getRepository(Observation::class)
                                ->findByBird($birdRef);

        return new JsonResponse($birdsObservations);
        }
    }

}