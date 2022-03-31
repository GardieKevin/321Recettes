<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetteController extends AbstractController
{
    #[Route('/recettes/liste', name: 'recettes_list')]
    public function list(): Response
    {
        return $this->render('recette/list.html.twig', [
        ]);
    }
}
