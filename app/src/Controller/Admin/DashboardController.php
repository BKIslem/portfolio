<?php
namespace App\Controller\Admin;

use App\Entity\Education;
use App\Entity\Experience;
use App\Entity\HardSkills;
use App\Entity\ProjectImage;
use App\Entity\Projects;
use App\Entity\SoftSkills;
use App\Entity\Tache;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator ::class);
        return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());
    }
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Dashbord');
    }
    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud('Users', 'fas fa-user-pen', User::class);
        yield MenuItem::linkToCrud('Hard skills', 'fas fa-list', HardSkills::class);
        yield MenuItem::linkToCrud('Soft skills', 'fas fa-list', SoftSkills::class);
        yield MenuItem::linkToCrud('Education', 'fas fa-list', Education::class);
        yield MenuItem::linkToCrud('Experience', 'fas fa-list', Experience::class);
        yield MenuItem::linkToCrud('Tach of Experience', 'fas fa-list', Tache::class);
        yield MenuItem::linkToCrud('Projects', 'fas fa-list', Projects::class);
        yield MenuItem::linkToCrud('Images', 'fas fa-image', ProjectImage::class);
    }
}
