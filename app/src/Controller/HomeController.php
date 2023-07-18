<?php

namespace App\Controller;

use App\Repository\HardSkillsRepository;
use App\Repository\PresentationRepository;
use App\Repository\SoftSkillsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index( HardSkillsRepository $hardSkillsRepository, SoftSkillsRepository $softSkillsRepository): Response
    {
        // $pres =$presentationRepository->findAll();
        $hard = $hardSkillsRepository->findAll();
        $soft = $softSkillsRepository->findAll();
        
        return $this->render('home/index.html.twig', [
            'hards' => $hard,
            'softs' => $soft
            // 'controller_name' => 'Ben Khaled Islem',
            // 'Presentation' => $pres
        ]);
    }
}
