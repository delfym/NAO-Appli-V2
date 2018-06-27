<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\AppUsers;

class UpdateUserStatusController extends Controller
{
	/**
	 * @Route("/becomeAdmin", name="become_admin")
	 */
	public function becomeAdmin(Request $request)
	{
		if ($request->isXmlHttpRequest()) {
            $user = $request->request->get('obsId');//htmlspecialchars($_POST['obsId']);

            $em = $this->getDoctrine()->getManager();

            $userupdate = $em->getRepository(AppUsers::class)
            ->find($user)
            ->setRole('ROLE_ADMIN')
            ->setAdminRequest(null);

            $em->flush();
            dump($user);
            return new JsonResponse(null,200);
        }
        return new JsonResponse(null,500);  
    }
	

	/**
	 * @Route("/stillUser")
	 */
	public function stillUser(Request $request)
	{

		if ($request->isMethod('POST')) {

		$submittedToken = $request->request->get('token');

			if ($this->isCsrfTokenValid('delete-item', $submittedToken)) 
				{
					$user = $request->request->get('idObs');
		           	$em = $this->getDoctrine()->getManager();

            		$userupdate = $em->getRepository(AppUsers::class)
            		->find($user)
            		->setAdminRequest(null);

            		$em->flush();
            		dump($user);
           			return $this->redirectToRoute('validate_pro_member');
				}                  
        }
       return $this->redirectToRoute('validate_pro_member');
    }
	
}