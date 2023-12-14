<?php
namespace App\Controller\Admin;
use App\Entity\SoftSkills;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
class SoftSkillsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SoftSkills::class;
    }
    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
