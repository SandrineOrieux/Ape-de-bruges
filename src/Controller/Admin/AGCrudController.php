<?php

namespace App\Controller\Admin;

use App\Entity\AG;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichFileType;

class AGCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AG::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('season', 'Saison');
        yield TextareaField::new('file')->setFormType(VichFileType::class)->hideOnIndex();
    }
}
