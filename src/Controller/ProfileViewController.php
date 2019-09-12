<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileViewController extends AbstractController
{
    /**
     * @Route("/account/profile", name="profile_view")
     */
    public function index()
    {
        // return $this->render('profile_view/index.html.twig', [
        //     'controller_name' => 'ProfileViewController',
        // ]);
        return new Response('This is your profile!!!!', 200);
    }
}
