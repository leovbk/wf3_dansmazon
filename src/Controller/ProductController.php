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

        // $comment = new Comment;

        // $formComment = $this->createForm(CommentType::class, $comment);

        // $formComment->handleRequest($request);

        // $id = $product->getId();

        

        // if($formComment->isSubmitted() && $formComment->isValid())
        // {
        //     $comment->setCreatedAt(new \DateTime());

        //     $comment->setProduct($product);

        //     $manager->persist($comment);

        //     $manager->flush();

        //     $this->addFlash('primary', "Votre commentaire a bien été ajouté");

        //     $this->redirectToRoute('app_show', [
        //         'id' => $id
        //     ]);
        // }

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


}