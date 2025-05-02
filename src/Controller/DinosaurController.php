<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\Dinosaur;

final class DinosaurController extends AbstractController
{
    #[Route('/dinosaur', name: 'app_dinosaur')]
    public function index(): Response
    {

       
        return $this->render('dinosaur/index.html.twig', [
            'controller_name' => 'DinosaurController',
            
        ]);
    }
}
