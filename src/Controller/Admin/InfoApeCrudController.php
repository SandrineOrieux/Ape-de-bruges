<?php

namespace App\Controller\Admin;

use App\Entity\InfoApe;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class InfoApeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InfoApe::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('name');
        yield TextField::new('description');
        yield TextField::new('url');
    }
}
