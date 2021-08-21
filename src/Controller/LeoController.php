<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeoController extends AbstractController
{
    /**
     * @Route("/leo", name="leo")
     */
    public function index(): Response
    {
        return $this->render('leo/index.html.twig', [
            'controller_name' => 'LeoController',
        ]);
    }
}
