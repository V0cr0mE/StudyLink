<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PostRepository;


class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page', methods: ['GET'])]
    public function index(PostRepository $postRepository): Response
    {
        // Récupère tous les posts via le repository
        $posts = $postRepository->findAll();

        // Passe les posts au template de la page d'accueil
        return $this->render('home/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}
