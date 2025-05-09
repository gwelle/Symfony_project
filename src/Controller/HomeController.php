<?php


//Spécifier la position du controleur par rapport au dossier src (app, cf. config/routes.yaml)
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
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

        $params = $request->query->all();
        dump($params);

        $products = ["iPhone", "Samsung", "Xiaomi", "Oppo", "OnePlus"];
        return $this->render('products.html.twig', ['products' => $products ]);
    }

    #[Route('/articles', name: 'articles')]
    public function showArticles(){
        $articles = ["iPhone", "Samsung", "Xiaomi", "Oppo", "OnePlus"];
        dump($articles);
        return $this->render('articles.html.twig', ['articles' => $articles]);
    }

    #[Route('/category/{id<\d+>}', name: 'category')]
    public function getCategories(int $id){
        $category_id = $id;
        return $this->render('category.html.twig', ['id_category' => $category_id]);
    }

    #[Route('/pages', name: 'pages')]
    public function getPages(){

        return $this->render('pages.html.twig',[]);
    }
}