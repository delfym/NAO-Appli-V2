<?php 

namespace App\Controller;


use App\Entity\Birds;
use App\Form\ObservationType;
use App\Entity\Observation;
use App\Entity\AppUsers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
		//$observ = new Observation();
		$form = $this->createForm(ObservationType::class);
        $em = $this->getDoctrine()->getManager();

            $selectedBird = $form->get('autocomp_bird')->getData();

			$user = $this->getUser();

			//récupérer l'id de l'obs saisie avec l'auto-complete grace à ajax

			$obs = $em->getRepository(Observation::class);


		return  $this->render('pages/displayObs.html.twig', [
		    'form' => $form->createView()
        ]);
	}

    /**
     * @Route("/recupObs")
     * @param Request $request
     * @return Response
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


}