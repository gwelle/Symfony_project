<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\Dinosaur;

final class DinosaurController extends AbstractController
{
    #[Route('/dinosaurs', name: 'dinosaurs_index')]
    public function index(): Response
    {

        $dinosaurs = [
            new Dinosaur('Big Eaty','Tyrannosaurus',15,'Paddock A'),
            new Dinosaur('Big Rex','Tyrannosaurus',10,'Paddock B'),
            new Dinosaur('Big Carnivor','Tyrannosaurus',5,'Paddock C'),
            new Dinosaur('Big Herbivor','Tyrannosaurus',2,'Paddock D')
        ];

        return $this->render('dinosaur/index.html.twig', [
            'controller_name' => 'DinosaurController',
            'dinosaurs' => $dinosaurs,
        ]);
    }
}
