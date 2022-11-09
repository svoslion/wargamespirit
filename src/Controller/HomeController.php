<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(CategoryRepository $categoryRepo): Response
    {
        return $this->render('home/index.html.twig', [
            'categories' => $categoryRepo->findAll()
        ]);
    }
}
