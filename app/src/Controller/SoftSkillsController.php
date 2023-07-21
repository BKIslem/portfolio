<?php

namespace App\Controller;

use App\Entity\SoftSkills;
use App\Form\SoftSkillsType;
use App\Repository\SoftSkillsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/softskills')]
class SoftSkillsController extends AbstractController
{
    #[Route('/', name: 'app_soft_skills_index', methods: ['GET'])]
    public function index(SoftSkillsRepository $softSkillsRepository): Response
    {
        return $this->render('soft_skills/index.html.twig', [
            'soft_skills' => $softSkillsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_soft_skills_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SoftSkillsRepository $softSkillsRepository): Response
    {
        $softSkill = new SoftSkills();
        $form = $this->createForm(SoftSkillsType::class, $softSkill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $softSkillsRepository->save($softSkill, true);

            return $this->redirectToRoute('app_soft_skills_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('soft_skills/new.html.twig', [
            'soft_skill' => $softSkill,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_soft_skills_show', methods: ['GET'])]
    public function show(SoftSkills $softSkill): Response
    {
        return $this->render('soft_skills/show.html.twig', [
            'soft_skill' => $softSkill,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_soft_skills_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SoftSkills $softSkill, SoftSkillsRepository $softSkillsRepository): Response
    {
        $form = $this->createForm(SoftSkillsType::class, $softSkill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $softSkillsRepository->save($softSkill, true);

            return $this->redirectToRoute('app_soft_skills_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('soft_skills/edit.html.twig', [
            'soft_skill' => $softSkill,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_soft_skills_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        SoftSkills $softSkill,
        SoftSkillsRepository $softSkillsRepository
    ): Response {
        if ($this->isCsrfTokenValid('delete' . $softSkill->getId(), $request->request->get('_token'))) {
            $softSkillsRepository->remove($softSkill, true);
        }

        return $this->redirectToRoute('app_soft_skills_index', [], Response::HTTP_SEE_OTHER);
    }
}
