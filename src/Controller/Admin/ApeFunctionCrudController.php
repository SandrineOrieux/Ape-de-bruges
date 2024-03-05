<?php

namespace App\Controller\Admin;

use App\Entity\ApeFunction;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ApeFunctionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ApeFunction::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('name'),

        ];
    }
}
