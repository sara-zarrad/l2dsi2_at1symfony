<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class testController extends AbstractController
{
    #[Route('/welcome')]

    public function hello()
    {
        dd('hello');
    }
    #[Route('/show')]
    public function show()
    {
        $var = 'fi9 ya shafi9!!!!';
        return new Response("<h1>ca fonctionne $var</h1>");
    }
    #[Route('/afficher')]
    public function afficher()
    {
        return $this->render('test/afficher.html.twig');
    }
}
