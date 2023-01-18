<?php

namespace App\Controller;


use App\Repository\GameRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api')]
class ApiController extends AbstractController 
{
    #[Route('/game')]
    public function game(GameRepository $gameRepository): Response
    {
        $entities = $gameRepository->findData();

        return new JsonResponse($entities);
    }
}