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

        $dinosaur = [
            new Dinosaur('Tyrannosaurus Rex', 'Carnivore', 12),
            new Dinosaur('Triceratops', 'Herbivore', 9),
            new Dinosaur('Velociraptor', 'Carnivore', 2),
            new Dinosaur('Brachiosaurus', 'Herbivore', 25),
        ];

        return $this->render('dinosaur/index.html.twig', [
            'controller_name' => 'DinosaurController',
            'dinosaurs' => $dinosaur,
        ]);
    }
}
