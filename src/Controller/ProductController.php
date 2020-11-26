<?php

namespace App\Controller;

use App\Document\Product;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/products",name="products", methods={"GET"})
     * @param Request $request
     * @param DocumentManager $dm
     * @return Response
     */
    public function productsAction(Request $request, DocumentManager $dm)
    {
        $products = $dm->getRepository( Product::class )->findAll();
        //affiche les textes d’un utilisateur
        return $this->render( "products/view.html.twig", [
            "products" => $products
        ] );
    }
}