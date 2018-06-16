<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 11/05/2018
 * Time: 23:21
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController
{
    /**
     * @Route("/")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function index(Environment $twig)
    {
        return new Response($twig->render('pages/index.html.twig'));
    }

    /**
     * @Route("/home", name="home")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function home(Environment $twig)
    {
        return new Response($twig->render('pages/index.html.twig'));
    }

    /**
     * @Route("/test")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function test(Environment $twig)
    {
        // return new Response('test');
        return new Response($twig->render('pages/index.html.twig'));
    }

    /**
     * @Route("/observForm")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function observForm(Environment $twig)
    {
        return new Response($twig->render('pages/observForm.html.twig'));
    }

    /**
     * @Route("/about")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function about(Environment $twig)
    {
        return new Response($twig->render('pages/about.html.twig'));
    }


    /**
     * @Route("/contact")
     * @param Environment $twig
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function contact(Environment $twig)
    {
        return new Response($twig->render('pages/contact.html.twig'));
    }
}