<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/User')]
final class AdminUserController extends AbstractController
{
    #[Route(name: 'app_admin_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('admin_user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_admin_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $User = new User();
        $form = $this->createForm(UserType::class, $User);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($User);
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin_user/new.html.twig', [
            'User' => $User,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_user_show', methods: ['GET'])]
    public function show(User $User): Response
    {
        return $this->render('admin_user/show.html.twig', [
            'User' => $User,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_admin_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $User, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $User);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin_user/edit.html.twig', [
            'User' => $User,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_admin_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $User, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$User->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($User);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_admin_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
