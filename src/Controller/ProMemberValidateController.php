<?php 

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Exception\NotValidCurrentPageException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class ProMemberValidateController extends Controller
{
    /**
     * @Route("/adminValidate/{page}", name="validate_pro_member", defaults={"page" = 1})
     * @param Request $request
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
	public function proMemberValidate(Request $request, $page)
	{
		$username = $this->getUser()->getUsername();
		$query = $this->getDoctrine()
					  ->getRepository('App:AppUsers')
					  ->getRole("ROLE_USER");

		$adapter = new DoctrineORMAdapter($query);
		$pager = new Pagerfanta($adapter);
		$pager->setMaxPerPage(3);

		try
		{
			$pager->setCurrentPage($page);
		}
		catch(NotValidCurrentPageException $e)
		{
			throw new NotFoundHttpException();
		}

		return  $this->render('pages/adminSpace/promembervalidate.html.twig', array(
			'pager' => $pager,
			'username' => $username,
		));

	}
}