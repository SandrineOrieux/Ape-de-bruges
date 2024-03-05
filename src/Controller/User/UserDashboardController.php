<?php

namespace App\Controller\User;

use App\Entity\AG;
use App\Entity\Logo;
use App\Entity\Event;
use App\Entity\Place;
use App\Entity\Season;
use App\Entity\Article;
use App\Entity\InfoApe;
use App\Entity\TitleEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class UserDashboardController extends AbstractDashboardController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
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
        yield MenuItem::linkToCrud('Saisons', 'fa-solid fa-calendar-days', Season::class);
        yield MenuItem::linkToCrud('AG', 'fa-solid fa-file-pdf', AG::class);
        yield MenuItem::linkToCrud('Article d\'accueil', 'fa-regular fa-newspaper', Article::class);
        yield MenuItem::subMenu('Evènements', 'fa-solid fa-calendar-check')->setSubItems([
            MenuItem::linkToCrud('Evènement', 'fa-solid fa-store', Event::class),
            MenuItem::linkToCrud('Lieu d\'évènement', 'fa-solid fa-location-dot', Place::class),
            MenuItem::linkToCrud('Nom d\'évènement', 'fa-solid fa-heading', TitleEvent::class),
        ]);
        yield MenuItem::linkToCrud('Contact APE', 'fa-solid fa-list', InfoApe::class);
    }
}
