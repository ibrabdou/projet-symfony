<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * Affiche le detail d'un produit
     * @Route(
     *     "/produit/{slug}",
     *      requirements={"slug"="[a-z0-9\-]+"}
     * )
     * @param string $slug
     * @return Response
     */
    public function show(string $slug): Response
    {
        var_dump($slug);
        dump($slug);

        return $this->render('products/show.html.twig');
    }

    /**
     * Affiche une HTML (détails de produit)
     * @param Request $requestHTTP
     * @return Response
     */

    public function create(Request $requestHTTP): Response
    {
        dump($requestHTTP->request);
        return $this->render('products/create.html.twig');
    }
}
