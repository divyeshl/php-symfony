<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/{name}', "home_route")]
    public function index(Request $request): Response
    {
        $name = $request->attributes->get('name');
        $nameQuery = $request->query->get('name');

        return $this->render('home.html.twig', [
            'name' => $name
        ]);
    }
}