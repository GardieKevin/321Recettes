<?php

namespace App\Controller;

use App\Entity\Recette;
use App\Repository\RecetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetteController extends AbstractController
{
    #[Route('/recettes/liste', name: 'recettes_list')]
    public function list(
        RecetteRepository $recetteRepository
    ): Response

    {
        $recipes = $recetteRepository->findAllRecipes();
        return $this->render('recette/list.html.twig',
            compact("recipes")
        );
    }

    #[Route('/recettes/details/{id}', name: 'recettes_details')]
    public function details(
        RecetteRepository $recetteRepository,
        Recette $recipe
    ): Response

    {
        return $this->render('recette/details.html.twig',
            compact("recipe")
        );
    }
}
