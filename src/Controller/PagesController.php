<?php  

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PagesController extends Controller
{
	/**
	 * @Route("/")
	 */
	/*public function index()
	{
		return new Response("<html><body>Page index</body></html>");
	}*/

	/**
	 * @Route("/home", name="home")
	 */
	public function home()
	{
		return $this->render('pages/index.html.twig');
	}

	/**
	 * @Route("/observForm")
	 */
	public function observForm()
	{
	 	return $this->render('pages/observForm.html.twig');
	}

	/**
	 * @Route("/about")
	 */
	public function about()
	{
		return new Response("<html><body>Page About</body></html>");
	}

	/**
	 * @Route("/contact")
	 */
	public function contact()
	{
		return new Response("<html><body>Page Contact</body></html>");
	}

	/**
	 * Route("/signin") IGNOREE
	 */
	/*public function signin()
	{
		return new Response("<html><body>Page Connection</body></html>");
	}*/

	/**
	 * Route("/signup")
	 */
	/*public function signup()
	{
		return new Response("<html><body>Page Inscription</body></html>");
	}*/

}






