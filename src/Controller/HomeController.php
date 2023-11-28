<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/nb_alea', name: 'home_nbAlea')]
    public function nbAlea(): Response
    {
        $randomNumbers = array_map(function () {
            return rand(1, 100);
        }, range(1, 10));

        $nbMax = $randomNumbers[0];
        foreach ($randomNumbers as $nb){
            
            if ($nb > $nbMax) {
                $nbMax = $nb;
            }
        }

        return $this->render('home/nb_alea.html.twig', [
            'randomNumbers' => $randomNumbers,
            'nbMax' => $nbMax
        ]);
    }


}
