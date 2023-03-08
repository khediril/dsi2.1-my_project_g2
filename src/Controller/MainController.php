<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {  
       /* $rep = new Response('<html><head></head><body>bonjour</body></html>');
        return $rep;*/
      
         return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
