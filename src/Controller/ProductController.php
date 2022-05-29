<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Product;
use App\Form\CommentType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/products", name="app_product")
     */
    public function index(ProductRepository $productRepo): Response
    {
        
        $products = $productRepo->findAll();
        
        return $this->json($products, 200, [],['groups' => 'product:read']);
    }

        /**
     * @Route("/product/{id}", name="app_show", requirements={"id" : "\d+"}, methods={"GET", "POST"})
     */
    public function show(Product $product, Request $request, EntityManagerInterface $manager): Response 
    {

        return $this->json([$product] , 200, [],['groups' => 'product:read']);

    }

    /**
     * @Route("/nouveautes", name="app_nouveautes")
     */
    public function showNewProducts(ProductRepository $productRepo): Response
    {

        $nouveautes = $productRepo->findNewProduct();
        
        return $this->json($nouveautes, 200, [],['groups' => 'product:read']);
    }

    /**
     * @Route("/research/{research}", name="app_research")
     */
    public function research(ProductRepository $productRepo, string $research): Response
    {

        $result = $productRepo->findResearch($research);
        
        return $this->json($result, 200, [],['groups' => 'product:read']);
    }

    /**
     * @Route("/products/categories/{id}", name="app_categories")
     */
    public function showByCat(ProductRepository $productRepo, $id): Response
    {

        $result = $productRepo->findByCategory($id);
        
        return $this->json($result, 200, [],['groups' => 'product:read']);
    }




}