<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends AbstractController
{
    /**
     * @Route("/home_page", name="home_page")
     */
    public function index()
    {
        //return $this->render('home_page/index.html.twig', [
          //  'controller_name' => 'HomePageController',
        //]);
            //return new Response('hello',200);
            return $this->redirect('https://www.hello-pomelo.com/'); 
     
    }
}
