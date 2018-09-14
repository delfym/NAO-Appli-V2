<?php 

namespace App\Controller;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
	use Symfony\Component\HttpFoundation\RedirectResponse;
	use Symfony\Component\HttpFoundation\JsonResponse;

class AutocompleteBirdsController extends Controller
{
    /**
     * @Route("/jq/birds", name="jquery_autocomplete_birds")
     * @param Request $request
     * @return RedirectResponse|Response
     */
	public function autocompleteBirds(Request $request)
	{
		if ($request->isXmlHttpRequest()) 
		{
			$term = $request->get('term');
			$maxRows = $request->get('maxRows');

			$em = $this->getDoctrine()->getManager();

			$birds = $em->getRepository('App:Birds')
						->getBirdsByrefName($term, $maxRows);

			return new JsonResponse($birds);	
		}
		else {

			//message flash
			return new RedirectResponse("/home");
		}

		
	}
}