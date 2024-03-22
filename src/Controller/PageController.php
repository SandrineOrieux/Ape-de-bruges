<?php

namespace App\Controller;

use App\Repository\AGRepository;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepository, AGRepository $aGRepository): Response
    {
        $articles = $articleRepository->findAll();
        $todayDate = new Date();




        return $this->render('pages/index.html.twig', [
            'articles' => $articles
        ]);
    }

    #[Route('/évènements', name: 'app_events')]
    public function events(): Response
    {
        return $this->render('pages/events.html.twig', []);
    }
}
