<?php

namespace App\Controller;

use App\Form\CustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Customer;
use App\Service\MyHelper;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;

final class CustomerController extends AbstractController
{
    // On va créer une route pour le formulaire
    // On va créer une méthode pour le formulaire
    #[Route('/form_customer', name: 'form_customer')]
    public function index(Request $request, ManagerRegistry $doctrine,
    LoggerInterface $logger, MyHelper $helper): Response
    {

        $currentDate = $helper->getTheDate(); // On va récupérer la date

        // On va créer une instance de l'entité Customer
        $customer = new Customer();

        // On va créer un formulaire pour l'entité Customer
        $customerForm = $this->createForm(CustomerType::class, $customer);

        // On va gérer la requête
        $customerForm->handleRequest($request);

        // On va vérifier si le formulaire est soumis et valide
        if($customerForm->isSubmitted() && $customerForm->isValid()){

            // On va récupérer les données du formulaire
            $customer = $customerForm->getData();

            // On va récupérer le manager
            $entityManager = $doctrine->getManager();

            // On va persister l'entité Customer
            $entityManager->persist($customer);

            // On va flush l'entité Customer
            $entityManager->flush();

            // On va créer une instance du logger
            $logger->info('Un client a été créé', [
                'name' => $customer->getName(),
                'firstName' => $customer->getFirstName(),
                'email' => $customer->getEmail(),

            ]);

            // On va rediriger vers la page d'accueil
            return $this->redirectToRoute('home');
        }
        
        return $this->render('customer/index.html.twig', [
            'customerForm' => $customerForm->createView() // On va créer une vue pour le formulaire
            ,'currentDate' => $currentDate // On va passer la date à la vue
        ]);
    }
}
