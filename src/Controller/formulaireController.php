<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FormulaireController extends AbstractController
{
    #[Route('/submit-post', name: 'app_submit_post', methods: ['POST'])]
    public function submitPost(Request $request): Response
    {
        // Récupérer les données du formulaire
        $titre = $request->request->get('titre');
        $description = $request->request->get('description');
        $date = $request->request->get('date');
        /** @var UploadedFile $photo */
        $photo = $request->files->get('photo');

        // Vérification des données de formulaire
        if (!$titre || !$description || !$date || !$photo) {
            return new Response("Tous les champs sont obligatoires.", Response::HTTP_BAD_REQUEST);
        }

        // Gestion du téléchargement de l'image
        $uploadsDir = $this->getParameter('kernel.project_dir') . '/public/uploads';
        if (!is_dir($uploadsDir)) {
            mkdir($uploadsDir, 0777, true);
        }

        // Générer un nom unique pour l'image
        $newFilename = uniqid() . '.' . $photo->guessExtension();

        try {
            // Déplacer le fichier téléchargé dans le dossier uploads
            $photo->move($uploadsDir, $newFilename);
        } catch (FileException $e) {
            return new Response("Erreur lors du téléchargement de la photo : " . $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        // Sauvegarder les informations du post (ex : base de données)
        // Vous pouvez ajouter ici une logique pour sauvegarder les données dans une base de données

        // Retourner une réponse ou rediriger vers une autre page
        return new Response("Post créé avec succès !");
    }
}
