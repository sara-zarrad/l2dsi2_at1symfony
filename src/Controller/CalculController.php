<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/acceuil', name: 'calcul_acceuil')]
    public function accueil(): Response
    {
        return $this->render('calcul/acceuil.html.twig', []);
    }

    #[Route('/some/{A}/{B}', name: 'calcul_some')]
    public function somme($A, $B): Response
    {
        $S = $A + $B;
        return $this->render('calcul/some.html.twig', [
            'S' => $S,
            'A' => $A,
            'B' => $B,
        ]);
    }
    #[Route('/soustract/{A}/{B}', name: 'calcul_soustract')]
    public function soustract($A, $B): Response
    {
        $ST = $A - $B;
        return $this->render('calcul/soustraction.html.twig', [
            'ST' => $ST,
            'A' => $A,
            'B' => $B,
        ]);
    }
}
