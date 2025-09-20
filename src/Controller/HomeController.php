<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $recentArticles = array(
            ["id" => 1, "title" => "Belle Rose", "image" => "rose.jpg"],
            ["id" => 2, "title" => "Tulipe Colorée", "image" => "tulip.jpg"],
            ["id" => 3, "title" => "Lys Élégant", "image" => "lily.jpg"]
        );
            
        return $this->render('home/index.html.twig', [
            'recentArticles' => $recentArticles,
        ]);
    }
}
