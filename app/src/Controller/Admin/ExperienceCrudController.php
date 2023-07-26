<?php

namespace App\Controller\Admin;

use App\Entity\Experience;
use App\Entity\Tache;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ExperienceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Experience::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('WorkPlace');
        yield TextField::new('Occupation');
        yield TextField::new('DateStart');
        /*yield TextField::new('tacheNames', 'Taches')
        ->onlyOnDetail();*/

        
    }
    
}
