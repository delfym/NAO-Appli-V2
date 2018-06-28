<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 19/06/2018
 * Time: 17:06
 */

namespace App\Controller;

use App\Entity\AppUsers;
use App\Entity\Observation;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\User\UserInterface;
use Twig\Environment;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Exception\NotValidCurrentPageException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdminSpaceController extends Controller
{
    private $currentUsername;
    private $currentUserId;

    /**
     * @Route("/adminSpace")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function adminSpace(Environment $twig){

        //$currentUserId = $this->getUser()->getId();
        //$currentUsername = $this->getUser()->getUsername();
        $this->getCurrentUser();
        $obs = $this->getDoctrine()
                    ->getRepository(Observation::class);

        $observations = $obs->findByUserId($this->currentUserId, 2);
        $validatesObs = $obs->findByStatus($this->currentUserId);

        return new Response($twig->render('pages/adminSpace/adminSpace.html.twig',[
            'username' => $this->currentUsername,
            'observations' => $observations,
            'validatesObs' => $validatesObs
        ]));
    }


    /**
     * @Route("/myObservations/{page}", name="my_observations", defaults={"page" = 1})
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function myObservations(Environment $twig, $page){
        $this->getCurrentUser();

        $obs = $this->getDoctrine()
                    ->getRepository(Observation::class)
                    ->createQueryBuilder('o')
                    ->where('o.user = :user')
                    ->setParameter('user', $this->getUser());

        $adapter = new DoctrineORMAdapter($obs);
        $pager = new Pagerfanta($adapter);
        $pager->setMaxPerPage(5);

        try
        {
            $pager->setCurrentPage($page);
        }
        catch(NotValidCurrentPageException $e)
        {
            throw new NotFoundHttpException();
        }
        //$observations = $obs->findByUserId($this->currentUserId);


//var_dump($observations);
             /*  $obs->setFile(new File(
              $this->getParameter('file_directory').'/'.$obs->getFile())  */
           // );


        $observations = $obs->findByUserId($this->currentUserId);


        return new Response($twig->render('pages/adminSpace/myObservations.html.twig',[
            'username'      => $this->currentUsername,
            'observations'  => $pager,
        ]));
    }


    /**
     * @Route("/allObservations/{page}", name="all_observations", defaults={"page" = 1})
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function allObservations(Environment $twig, $page){
        $this->getCurrentUser();

        $obs = $this->getDoctrine()
            ->getRepository(Observation::class)
            ->createQueryBuilder('a')
            ->where('a.validation_date IS NOT NULL')
            ->andWhere('a.delete_date IS NULL')
            ->andWhere('a.reason_of_delete IS NULL')
            ->orderBy('a.post_date', 'ASC');

        $adapter = new DoctrineORMAdapter($obs);
        $pager = new Pagerfanta($adapter);
        $pager->setMaxPerPage(5);

        try
        {
            $pager->setCurrentPage($page);
        }
        catch(NotValidCurrentPageException $e)
        {
            throw new NotFoundHttpException();
        }    
        //$observations = $obs->findAll();

        return new Response($twig->render('pages/adminSpace/allObservations.html.twig',[
            'username'      => $this->currentUsername,
            'observations'  => $pager
        ]));
    }

    /**
     * @Route("/obsToValidate/{page}", name="obs_validate", defaults={"page" = 1})
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function obsToValidate(Environment $twig, $page){

        $this->getCurrentUser();
        $obs = $this->getDoctrine()
                    ->getRepository(Observation::class)
                    ->createQueryBuilder('v')
                    ->where('v.validation_date IS NULL')
                    ->andWhere('v.delete_date IS NULL')
                    ->andWhere('v.reason_of_delete IS NULL')
                    ->orderBy('v.post_date', 'ASC');

        $adapter = new DoctrineORMAdapter($obs);
        $pager = new Pagerfanta($adapter);
        $pager->setMaxPerPage(5);

        try
        {
            $pager->setCurrentPage($page);
        }
        catch(NotValidCurrentPageException $e)
        {
            throw new NotFoundHttpException();
        }
                    
        //$observations = $obs->findByUserId($this->currentUserId);
        //$obsToValidate = $obs->findByStatus($this->currentUserId);

        return new Response($twig->render('pages/adminSpace/obsToValidate.html.twig',[
            'username' => $this->currentUsername,
            'validatesObs' => $pager,
        ]));
    }

    /**
     * @Route("/updateObs")
     * @param Request $request
     * @return Response
     */
    public function updateObs(Request $request){
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
     * @Route("/refusedObs")
     * @param Request $request
     * @return Response
     */
    public function refusedObs(Request $request){
        if ($request->isMethod('POST')) {
            $obsId = htmlspecialchars($_POST['idObs']);
            $refusalComment = htmlspecialchars($_POST['refusalComment']);

            $em = $this->getDoctrine()
                        ->getManager();

            $obsToUpdate = $em->getRepository(Observation::class)
                                ->find($obsId);
            $obsToUpdate->setDeleteDate(new \DateTime());
            $obsToUpdate->setReasonOfDelete($refusalComment);
            $em->flush();

            return new RedirectResponse('obsToValidate');
        }
        return new RedirectResponse('obsToValidate');
    }

    private function getCurrentUser(){
        $this->currentUserId = $this->getUser()->getId();
        $this->currentUsername = $this->getUser()->getUsername();
    }
}