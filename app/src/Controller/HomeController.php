<?php

namespace App\Controller;

use App\Repository\PresentationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(PresentationRepository $presentationRepository): Response
    {
        $pres =$presentationRepository->findAll();
        //dd($pres);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'Presentation' => $pres
        ]);
    }
}
