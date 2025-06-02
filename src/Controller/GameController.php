<?php

namespace App\Controller;

use App\Repository\GameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GameController extends AbstractController
{
      #[Route('/game/list', name: 'app_game_list')]
    public function list(GameRepository $gameRepository): Response
    {
        //get all games
        $games = $gameRepository->findAll();




        return $this->render('game/list.html.twig', [
            'games' => $games,
        ]);
    }

}
