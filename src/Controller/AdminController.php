<?php

namespace App\Controller;

use DateTime;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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

    public function adminProductCreate(Request $request,CategoryRepository $categoryRep,  EntityManagerInterface $manager, SluggerInterface $slugger): Response
    {

        $image = $request->files->get('image');

        $formData = $request->request;

        $category = $categoryRep->find($formData->get('category'));

        $product = new Product();

        $product->setTitle($formData->get('title'));
        $product->setPrice($formData->get('price'));
        $product->setContent($formData->get('content'));
        $product->setCategory($category);
        $product->setAddDate(new \DateTime());

        $imageOriginalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

        $sluggedFileName =   $slugger->slug($imageOriginalName);

        $newImageName = $sluggedFileName . '-' . uniqid() .'.'. $image->guessExtension();

        try{

            $image->move( $this->getParameter('image_directory'), $newImageName );

        }catch(FileException $e){
                    
            return $this->json($e->getMessage());
        }

        $product->setImageFileName($newImageName);

        $manager->persist($product);

        $manager->flush();

        // $form->submit($product);

        // return $this->json($product, 200, [],['groups' => 'product:read']);

        return $this->json(true, 200);

    }

    /**
     * @Route("/admin/product/edit", name="app_admin_product_edit")
     */

    public function adminProductEdit(ProductRepository $productRepo, Request $request,CategoryRepository $categoryRep,  EntityManagerInterface $manager, SluggerInterface $slugger): Response
    {
        $image = $request->files->get('image');

        $formData = $request->request;

        $category = $categoryRep->find($formData->get('category'));

        $product = $productRepo->find($formData->get('id'));

        $product->setTitle($formData->get('title'));
        $product->setPrice($formData->get('price'));
        $product->setContent($formData->get('content'));
        $product->setCategory($category);
        $product->setAddDate(new \DateTime());

        $imageOriginalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

        $sluggedFileName =   $slugger->slug($imageOriginalName);

        $newImageName = $sluggedFileName . '-' . uniqid() .'.'. $image->guessExtension();

        try{

        $image->move( $this->getParameter('image_directory'), $newImageName );

        }catch(FileException $e){
                    
            return $this->json($e->getMessage());
        }

        $product->setImageFileName($newImageName);

        $manager->persist($product);

        $manager->flush();

        // $form->submit($product);

        // return $this->json($product, 200, [],['groups' => 'product:read']);

        return $this->json(true, 200);

        // return $this->json($request);

    }

    /**
      * @Route("/admin/product/delete/{id}", name="app_admin_product_delete")
      */

    public function adminProductDelete(Product $product, EntityManagerInterface $manager) : Response 
    {
        $manager->remove($product);

        $manager->flush();

        return $this->json(true, 200);
    }
    
}