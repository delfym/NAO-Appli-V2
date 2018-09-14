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
    use Symfony\Component\HttpFoundation\File\UploadedFile;
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


    private function getObsRepo(){
         return $this->getDoctrine()
                    ->getManager()
                    ->getRepository(Observation::class);             
    }

    /**
     * @Route("/adminSpace")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function adminSpace(Environment $twig){
        $observations = $this->getObsRepo()
                             ->findByUserId($this->currentUserId, 2);

        $validatesObs = $obs->findByStatus($this->currentUserId, 2);

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

        $myObs = $this->getObsRepo()
                      ->getCurrentUser($this->getUser());

        $adapter = new DoctrineORMAdapter($myObs);
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
        $obs = $this->getObsRepo()
                    ->findAllObs(); 

        $adapter = new DoctrineORMAdapter($obs);
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


        return new Response($twig->render('pages/adminSpace/allObservations.html.twig',[
            'username'      => $this->currentUsername,
            'observations'  => $pager
        ]));
    }

    /**
     * @Route("/obsToValidate/{page}", name="obs_validate", requirements={"page" = "\d+"}, defaults={"page" = 1})
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function obsToValidate(Environment $twig, $page){

        $obs = $this->getDoctrine()
                    ->getRepository(Observation::class)
                    ->getObsToValidate();

        $adapter = new DoctrineORMAdapter($obs);
        $pager = new Pagerfanta($adapter);
        $pager->setMaxPerPage(3);

        try
        {
            $pager->setCurrentPage($page);

            return new Response($twig->render('pages/adminSpace/obsToValidate.html.twig',[
                'username' => $this->currentUsername,
                'validatesObs' => $pager,
            ]));
        }
        catch(NotValidCurrentPageException $e)
        {
            //throw new NotFoundHttpException('page non trouvée');
            return new Response($this->render('pages/index.html.twig'));

        }
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

            $obsToUpdate->getObsRepo()
                        ->find($obsId);
            $obsToUpdate->setDeleteDate(new \DateTime());
            $obsToUpdate->setReasonOfDelete($refusalComment);
            $em->flush();

            return new RedirectResponse('obsToValidate');
        }
        return new RedirectResponse('obsToValidate');
    }

    private function getCurrentUser(){
        if ($this->getUser() instanceof AppUsers) 
        {
            $this->currentUserId = $this->getUser()->getId();
            $this->currentUsername = $this->getUser()->getUsername();
        }
        else
        {
            $this->currentUserId = null;
            $this->currentUsername = "!";
        }
    }
}