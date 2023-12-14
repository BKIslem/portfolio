<?php

namespace App\Controller;
use App\Repository\ProjectImageRepository;
use App\Repository\ProjectsRepository;
use App\Repository\EducationRepository;
use App\Repository\ExperienceRepository;
use App\Repository\HardSkillsRepository;
use App\Repository\SoftSkillsRepository;
use App\Repository\TacheRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        HardSkillsRepository $hardSkillsRepository,
        SoftSkillsRepository $softSkillsRepository,
        EducationRepository $educationRepository,
        ExperienceRepository $experienceRepository,
        ProjectsRepository $projectsRepository,
        ProjectImageRepository $projectImageRepository,
        TacheRepository $tacheRepository
    ): Response {
        // $pres =$presentationRepository->findAll();
        $hard = $hardSkillsRepository->findAll();
        $soft = $softSkillsRepository->findAll();
        $education = $educationRepository->findAll();
        $experience = $experienceRepository->findall();
        $projects = $projectsRepository->findall();
        $projectimages = $projectImageRepository->findall();
        $tache = $tacheRepository ->findAll();
        return $this->render('home/index.html.twig', [
            'hards' => $hard,
            'softs' => $soft,
            'educations' => $education,
            'experiences' => $experience,
            'myprojects' => $projects,
            'myphotos' => $projectimages,
            'taches' => $tache
            // 'controller_name' => 'Ben Khaled Islem',
            // 'Presentation' => $pres
        ]);
    }
}
