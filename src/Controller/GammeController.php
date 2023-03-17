<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GammeController extends AbstractController
{
    // #[Route('/gamme', name: 'app_gamme')]
    // public function index(): Response
    // {
    //     return $this->render('gamme/index.html.twig', [
    //         'controller_name' => 'GammeController',
    //     ]);
    // }
    #[Route('/gamme', name: 'Gamme_liste')]
    public function lister(): Response
    {
        $gamme = ['ordinateur', 'videoprojecteur', 'imprimante', 'accesoire'];
        return $this->render('gamme/liste.html.twig', ['tab' => $gamme]);
    }
}
