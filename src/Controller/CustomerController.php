<?php

namespace App\Controller;

use App\Form\CustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CustomerController extends AbstractController
{
    // On va créer une route pour le formulaire
    // On va créer une méthode pour le formulaire
    #[Route('/form_customer', name: 'form_customer')]
    public function index(): Response
    {

        // On va créer un formulaire pour l'entité Customer
        $customerForm = $this->createForm(CustomerType::class);

        return $this->render('customer/index.html.twig', [
            'customerForm' => $customerForm->createView() // On va créer une vue pour le formulaire
        ]);
    }
}
