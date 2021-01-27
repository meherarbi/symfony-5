<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalleAttenteController extends AbstractController
{
    /**
     * @Route("/salleAttente", name="salle_attente")
     */
    public function index(): Response
    {
        return $this->render('salle_attente/index.html.twig', [
            'controller_name' => 'SalleAttenteController',
        ]);
    }
}
