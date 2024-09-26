<?php

namespace App\Controller;

use App\Entity\Post; 
use Doctrine\ORM\EntityManagerInterface; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route; 

class HomePageController extends AbstractController 
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager) 
    {
<<<<<<< Updated upstream
        return $this->render('index.html.twig', [
=======
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_home_page')]
    public function index(): Response 
    {
        $posts = $this->entityManager->getRepository(Post::class)->findAll();

        return $this->render('home/index.html.twig', [
>>>>>>> Stashed changes
            'controller_name' => 'HomePageController',
            'posts' => $posts,
        ]);
    }
}
