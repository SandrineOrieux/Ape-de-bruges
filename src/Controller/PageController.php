<?php

namespace App\Controller;

use App\Repository\AGRepository;
use App\Repository\ArticleRepository;
use App\Repository\EventRepository;
use App\Repository\SeasonRepository;
use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepository, AGRepository $aGRepository): Response
    {
        $articles = $articleRepository->findAll();

        return $this->render('pages/index.html.twig', [
            'articles' => $articles
        ]);
    }

    #[Route('/évènements', name: 'app_events')]
    public function events(EventRepository $eventRepository, SeasonRepository $seasonRepository): Response
    {

        $today = date('Y-m-d H:i:s');

        $actualseason = $seasonRepository->findActualSeason($today);

        $futurEvents = $eventRepository->findFutureEvents($today);



        return $this->render('pages/events.html.twig', [
            'futurEvents' => $futurEvents,
            'season' => $actualseason,
        ]);
    }

    #[Route('/évènements/passés', name: 'app_eventsPast')]
    public function eventsPast(EventRepository $eventRepository, SeasonRepository $seasonRepository): JsonResponse
    {

        $today = date('Y-m-d H:i:s');

        $actualseason = $seasonRepository->findActualSeason($today);

        $pastEvents = $eventRepository->findPastEvents($today, $actualseason->getStartYear());


        return new JsonResponse([
            'content' => $this->renderView('/partials/events/_pastEvents.html.twig', [
                'season' => $actualseason,
                'pastEvents' => $pastEvents
            ])
        ]);
    }
}
