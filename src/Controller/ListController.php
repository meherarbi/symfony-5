<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */

    public function index(Request $request)
    {

        return $this->render('list/index.html.twig', [

        ]);
        function index(): Response
        {
            return $this->render('rendez_vous/index.html.twig', [
                'controller_name' => 'RendezVousController',
            ]);

        }
    }
}