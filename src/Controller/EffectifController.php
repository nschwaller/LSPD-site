<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EffectifController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager=$entityManager;
    }

    /**
     * @Route("/effectif", name="effectif")
     */
    public function index(): Response
    {
        $userComplete = $this->entityManager->getRepository(User::class)->findAll();

        return $this->render('effectif/index.html.twig', [
            'effectif' => $userComplete
        ]);
    }
}
