<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewEntrepriseController extends AbstractController
{
    /**
     * @Route("/entreprise/nouvelle", name="new_entreprise")
     */
    public function index()
    {
        // return $this->render('new_entreprise/index.html.twig', [
        //     'controller_name' => 'NewEntrepriseController',
        // ]);
        return new Response('This is a new entreprise page',200);
    }
}
