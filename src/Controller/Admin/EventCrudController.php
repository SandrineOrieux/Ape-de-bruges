<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class EventCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Event::class;
    }

        public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->overrideTemplate('crud/index', 'admin/_messages/news.html.twig');
    }


    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('title', 'Titre de l\'évènement');
        yield AssociationField::new('season', 'Saison')->hideOnIndex();
        yield AssociationField::new('place', 'Lieu')->hideOnIndex();
        yield DateTimeField::new('start', 'Début: date et heure');
        yield DateTimeField::new('end', 'Fin: date et heure')->hideOnIndex();
        yield TextField::new('slogan', 'Phrase d\'accroche')->hideOnIndex();
        yield TextEditorField::new('description', 'Description :')->hideOnIndex();
        yield BooleanField::new('isInNews', 'Visible dans les news ?');
        yield CollectionField::new('image')->useEntryCrudForm(ImageEventCrudController::class)->hideOnIndex();
    }
}
