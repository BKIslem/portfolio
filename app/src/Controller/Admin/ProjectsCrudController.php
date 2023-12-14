<?php
namespace App\Controller\Admin;
use App\Entity\Projects;
use App\Form\Type\ProjectImageType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
class ProjectsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projects::class;
    }
    public function configureFields(string $pageName): iterable
    {
            yield TextField::new('Name');
            yield DateField::new('YearOfRelease');
            yield CollectionField::new('projectImages')
            ->setEntryType(ProjectImageType::class);
    }
}
