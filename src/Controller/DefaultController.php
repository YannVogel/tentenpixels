<?php

namespace App\Controller;

use App\Entity\TenTen;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(): Response
    {
        $tentens[] = new TenTen("Yann Vogel");

        return $this->render('default/index.html.twig', ['tentens' => array_map(function ($tenten) {
            return $tenten->getContent();
        }, $tentens)]);
    }
}
