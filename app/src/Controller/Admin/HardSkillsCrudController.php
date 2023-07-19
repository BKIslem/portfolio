<?php

namespace App\Controller\Admin;

use App\Entity\HardSkills;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HardSkillsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HardSkills::class;
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
