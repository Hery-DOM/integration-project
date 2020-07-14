<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(Request $request)
    {
        $article1 = [

            'id' => 1,
            'title' => 'Le glacier indomptable',
            'picture' => 'glacier.jpg',
            'pictureAlt' => 'photo glacier',
            'author' => [
                'id' => 1,
                'name' => 'Jean'
            ],
            'keywords' => [
                'glacier', 'hiver', 'alpinisme'
            ]

        ];

        $article2 = [

            'id' => 2,
            'title' => "L'étoile de minuit",
            'picture' => 'etoile.jpeg',
            'pictureAlt' => 'photo glacier',
            'author' => [
                'id' => 2,
                'name' => 'Marguerite'
            ],
            'keywords' => [
                'nuit', 'polaire'
            ]

        ];

        $article3 = [

            'id' => 3,
            'title' => "Islande",
            'picture' => 'islande.jpeg',
            'pictureAlt' => 'photo islande',
            'author' => [
                'id' => 2,
                'name' => 'Marguerite'
            ],
            'keywords' => [
                'pays', 'europe', 'road trip'
            ]

        ];

        $articles = [$article1, $article2, $article3];

        if($request->isMethod('POST')){
            die("Formulaire soumis");
        }

        return $this->render('home.html.twig',[
            'articles' => $articles
        ]);
    }

}