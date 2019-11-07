<?php

namespace App\Controller;

use App\Entity\OptionSite;
use App\Entity\Opinion;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('Front/home.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('Front/contact.html.twig');
    }

    /**
     * @Route("/qui-sommes-nous", name="who_are")
     */
    public function info()
    {
        return $this->render('Front/qui-sommes.html.twig');
    }

    /**
     * @Route("/mentions-legales", name="mention")
     */
    public function mention()
    {
        return $this->render('Front/mentions-legales.html.twig');
    }

    /**
     * @Route("/notre-concept", name="concept")
     */
    public function concept()
    {
        return $this->render('Front/concept.html.twig');
    }
}
