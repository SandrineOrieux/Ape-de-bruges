<?php

namespace App\Controller\Admin;

use App\Entity\AG;
use App\Entity\ApeFunction;
use App\Entity\Article;
use App\Entity\Event;
use App\Entity\InfoApe;
use App\Entity\Logo;
use App\Entity\Place;
use App\Entity\Season;
use App\Entity\TitleEvent;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Ape De Bruges');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Logos', 'fa-solid fa-mountain-sun', Logo::class);
        yield MenuItem::linkToCrud('Fonctions', 'fa-solid fa-user-secret', ApeFunction::class);
        yield MenuItem::linkToCrud('Utilisateurs', 'fa-solid fa-users', User::class);
        yield MenuItem::linkToCrud('Informations de contact', 'fa-solid fa-list', InfoApe::class);
        yield MenuItem::linkToCrud('AG', 'fa-solid fa-file-pdf', AG::class);
        yield MenuItem::linkToCrud('Saisons', 'fa-solid fa-calendar-days', Season::class);
        yield MenuItem::linkToCrud('Article accueil', 'fa-regular fa-newspaper', Article::class);
        yield MenuItem::linkToCrud('Lieu d\'évènement', 'fa-solid fa-location-dot', Place::class);
        yield MenuItem::linkToCrud('Nom d\'évènement', 'fa-solid fa-heading', TitleEvent::class);
        yield MenuItem::linkToCrud('Evènement', 'fa-solid fa-store', Event::class);
    }
}
