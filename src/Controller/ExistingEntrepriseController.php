<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExistingEntrepriseController extends AbstractController
{
    /**
     * @Route("/entreprise/existante", name="existing_entreprise")
     */
    public function index()
    {
        // return $this->render('existing_entreprise/index.html.twig', [
        //     'controller_name' => 'ExistingEntrepriseController',
        // ]);
        return new Response('This is existing entreprise',200);
    }
}
