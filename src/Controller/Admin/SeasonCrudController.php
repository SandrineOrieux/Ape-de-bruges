<?php

namespace App\Controller\Admin;

use App\Entity\Season;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SeasonCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Season::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield DateTimeField::new('startYear')->hideOnIndex();
        yield DateTimeField::new('endYear')->hideOnIndex();
        yield DateTimeField::new('startYear')->setFormat('yyyy')->hideOnForm();
        yield DateTimeField::new('endYear')->setFormat('yyyy')->hideOnForm();
    }
}
