<?php

namespace App\Controller\Admin;

use App\Entity\ProjectImg;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProjectImgCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProjectImg::class;
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
