<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(): Response
    {
<<<<<<< HEAD
        return $this->render('home/index.html.twig', [
=======
        return $this->render('home/accueil.html.twig', [
>>>>>>> 14cc1787d0d93622152c2e4e0fdfd2e3ba306e25
            'controller_name' => 'HomePageController',
        ]); 
    }
}
