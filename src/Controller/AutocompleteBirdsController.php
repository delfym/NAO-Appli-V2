<?php 

namespace App\Controller;

//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class AutocompleteBirdsController extends Controller
{
	/**
	 * @Route("/jq/birds", name="jquery_autocomplete_birds")
	 */
	public function autocompleteBirds(Request $request)
	{
		// verifier si c'est une requete XMLHTTP via isXmlHttpRequest()

		$term = $request->get('term');

		$em = $this->getDoctrine()->getManager();

		$birds = $em->getRepository('App:Birds')->createQueryBuilder('b')
			->andWhere('b.nom_de_reference LIKE :bird')
			->setParameter('bird', '%'.$term.'%')
			->getQuery()
			->getResult();

		//var_dump($birds);
		//var_dump($term);

	    foreach ($birds as $bird) 
	    {
	    	$nom_reference[] = $bird->getNomDeReference(); 
	    }

		$autocomplete = new JsonResponse();
		$autocomplete->setData($nom_reference);

		return $autocomplete;
	}
}