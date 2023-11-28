<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(): Response
    {

        $tableau = [
            'Make sure your cat is sitting purrrfectly still',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
            ];

           
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'bonjour' => 'BONJOUR',
            'tableau' => $tableau,
        ]);
    }

    #[Route('/article/{number}', name: 'app_article_number')]
    public function articleNumber($number): Response
    {
        return $this->render('article/article_number.html.twig', [
            'this_number' => $number,
            'controller_name' => 'ArticleController'.$number,
        ]);
    }
}
