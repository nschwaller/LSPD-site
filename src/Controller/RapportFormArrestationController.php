<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RapportFormArrestationController extends AbstractController
{

    /**
     * @Route("/rapport_form_arrestation", name="rapport_form_arrestation")
     */
    public function index(): Response
    {
        return $this->render('rapport/rapport_form_arrestation.html.twig', [
            'controller_name' => 'RapportFormArrestationController',
        ]);
    }
}
