<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SidebarController extends AbstractController
{
    #[Route('/sidebar', name: 'app_sidebar')]
    public function index(): Response
    {
        return $this->render('sidebar/index.html.twig', [
            'controller_name' => 'SidebarController',
        ]);
    }
}
