<?php


//Spécifier la position du controleur par rapport au dossier src (app, cf. config/routes.yaml)
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {

    /* La route va permettre d'accéder au controleur, en accédant particulièrement
       à une méthode du controleur.
       On va créer cela dans config/routes.yaml
    */
     public function sayHello(){
        return new Response("Hello World");
    }

    public function sayBye(){
        return $this->redirectToRoute('home');
    }

    public function redirectToLinkedin(){
        return $this->redirect("https://linkedin.com/");
    }

    public function showTemplate(){

        // render prends en paramètre le nom du template et crée un tableau de données
        return $this->render('base.html.twig', []);
    }

    
    public function showproducts(Request $request){

        //$params = $request->query->get('product');
        $params = $request->query->all();
        dump($params);

        $products = ["iPhone", "Samsung", "Xiaomi", "Oppo", "OnePlus"];
        return $this->render('products.html.twig', ['products' => $products ]);
    
    }
}