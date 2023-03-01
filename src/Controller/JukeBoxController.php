<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JukeBoxController extends AbstractController
{
    #[Route('/jukebox', name: 'app_juke_box')]
    public function index(): Response
    {
        return $this->render('juke_box/index.html.twig', [
            'controller_name' => 'JukeBoxController',
            
        ]);
    }
}
