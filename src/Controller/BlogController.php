<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/list', name: 'blog_list')]
    public function list(): Response
    {
        return new Response('<h1>liste des articles</h1>');
    }
    #[Route('/blog/{id<\d+>}/{name}', name: 'blog_list')]
    public function show($id, $name): Response
    {
        return $this->render('blog/show.html.twig', [
            'id' => $id,
            'name' => $name,
        ]);
    }
    #[Route('/blog/{id<\d+>}/{name}', name: 'blog_list2', priority:1)]
    public function show2($id, $name): Response
    {
        return new Response("le nom de larticle $id est $name ");
    }
    
    #[Route('/blog/test', name: 'blog_test')]
    public function someMethod(): Response
    {
        // $URL = $this->generateUrl('blog_list2',['id'=>100,'name'=>'symfony']); pour sauvgarder les para
        // return $this->redirect($URL);
        return $this->redirectToRouter('blog_list2',['id'=>100,'name'=>'symfony']); //sans sauvg
    }
}
