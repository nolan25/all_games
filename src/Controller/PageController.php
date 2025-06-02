<?php

namespace App\Controller;

use App\Repository\GameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PageController extends AbstractController
{
    #[Route('/', name: 'app_page')]
    public function index(): Response
    {
         return $this->render('admin/dashboard.html.twig');
    }
     #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('page/about.html.twig', [
           
        ]);
    }
    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('page/home.html.twig', [
           
        ]);
    }

}
