<?php

//Spécifier la position du controleur par rapport au dossier src (app, cf. config/routes.yaml)
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController{

    /* La route va permettre d'accéder au controleur, en accédant particulièrement 
       à une méthode du controleur.
       On va créer cela dans config/routes.yaml
    */
     public function sayHello(){

        return new Response("Hello World");
    }
}
