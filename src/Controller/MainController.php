<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{

    public function __construct()
    {

    }

    /**
     * @Route("/index", name="index")
     */
    public function index(Request $request, MovieRepository $movieRep): Response
    {
//        if (!$this->getUser()) {
//            return $this->redirectToRoute("app_login");
//        }



        return $this->render('index/index.html.twig', [
            "movies" => $movieRep->findAll(),
        ]);
    }
}
