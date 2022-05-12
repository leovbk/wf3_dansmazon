<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="app_admin")
     */
    public function index(ProductRepository $productRepository): Response
    {

        $products = $productRepository->findAll();

        dd($products);


        return $this->render('admin/index.html.twig', [
            'products' => $products
        ]);
    }

    /**
     * @Route("/admin/product/create", name="app_admin_product_create")
     */

     public function adminProductCreate(Request $request, EntityManagerInterface $manager): Response
     {
         $product = new Product();
         
         $form = $this->createForm(ProductType::class, $product);

         $form->handleRequest($request);

         if($form->isSubmitted() && $form->isValid()) {

            $manager->persist($product);

            $manager->flush();

            return $this->redirectToRoute('app_admin');
         }

         return $this->render('admin/createProduct.html.twig', [
            'form' => $form->createView(),
        ]);

     }
}