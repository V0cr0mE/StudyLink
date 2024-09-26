<?php

namespace App\Controller;

use App\Repository\PostRepository; // Importez le PostRepository
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    private PostRepository $postRepository;

    // Ajoutez le constructeur pour injecter le PostRepository
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    #[Route('/', name: 'app_home_page')]
    public function index(): Response
    {
        // Récupérez tous les posts
        $posts = $this->postRepository->findAll(); // Utilisez findAll() pour récupérer tous les posts

        return $this->render('index.html.twig', [
            'posts' => $posts, // Passez tous les posts à la vue
        ]);
    }
}
