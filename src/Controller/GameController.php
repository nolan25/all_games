<?php

namespace App\Controller;

use App\Entity\Game;
use App\Repository\GameRepository;
use App\Repository\WishlistItemRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GameController extends AbstractController
{
     #[Route('/game/{id}', name: 'app_game_show')]
    public function show(Game $game, Request $request, EntityManagerInterface $entityManager, WishlistItemRepository $wishlistItemRepository): Response
    {


        $user = $this->getUser();


        $wishlist = $wishlistItemRepository->findOneBy(['game' => $game, 'user' => $user]);
        return $this->render('game/show.html.twig', [
            'game' => $game,
            'wishlist' => $wishlist,
        ]);
    }


}
