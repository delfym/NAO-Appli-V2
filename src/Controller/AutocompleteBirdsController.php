<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\RedirectResponse;

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

		$encoders = array(new XmlEncoder(), new JsonEncoder);

		$normalizers = array(new ObjectNormalizer());

		$serializer = new Serializer($normalizers, $encoders);

		$birds = $em->getRepository('App:Birds')->createQueryBuilder('b')
			->select('b.nom_de_reference')
			->andWhere('b.nom_de_reference LIKE :bird')
			->setParameter('bird', '%'.$term.'%')
			->setMaxResults($maxRows)
			->getQuery()
			->getResult();

	    $json = $serializer->serialize($birds, 'json');
		$response = new Response($json);
		$response->headers->set('Content-Type', 'application/json');
		return $response;
		
		}
		else {

			//message flash
			return new RedirectResponse("/home");
		}

		
	}
}