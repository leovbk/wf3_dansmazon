<?php

namespace App\Controller;

use DateTime;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
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

    public function adminProductCreate(Request $request, EntityManagerInterface $manager, SluggerInterface $slugger): Response
    {
        $product = new Product();
        
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $product->setAddDate(new \DateTime());

            /** @var UploadedFile $imageFile */

            $imageFile = $form->get('image')->getData();

            if($imageFile){

                //On stock le nom orignal du fichier (sans l'extension)
                $originalName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);

              //On attribut un nom plus propre au ficher
                $sluggedFileName =   $slugger->slug($originalName);

                $newImageName = $sluggedFileName . '-' . uniqid() .'.'. $imageFile->guessExtension();

                try{

                    $imageFile->move( $this->getParameter('image_directory'), $newImageName );

                }catch(FileException $e){
                    
                    return "Erreur: ".  $e->getMessage();
                }


                $product->setImageFileName($newImageName);

            }

            

            $manager->persist($product);

            $manager->flush();

            return $this->redirectToRoute('app_admin');
        }

        return $this->render('admin/createProduct.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/admin/product/edit/{id}", name="app_admin_product_edit")
     */

    public function adminProductEdit(Product $product, Request $request, EntityManagerInterface $manager, SluggerInterface $slugger): Response
    {
        
        $form = $this->createForm(ProductType::class, $product);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            /** @var UploadedFile $imageFile */

            $imageFile = $form->get('image')->getData();

            if($imageFile){

                //On stock le nom orignal du fichier (sans l'extension)
                $originalName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);

              //On attribut un nom plus propre au ficher
                $sluggedFileName =   $slugger->slug($originalName);

                $newImageName = $sluggedFileName . '-' . uniqid() .'.'. $imageFile->guessExtension();

                try{

                    $imageFile->move( $this->getParameter('image_directory'), $newImageName );

                }catch(FileException $e){
                    
                    return "Erreur: ".  $e->getMessage();
                }


                $product->setImageFileName($newImageName);

            }

            

            $manager->persist($product);

            $manager->flush();

            return $this->redirectToRoute('app_admin');
        }

        return $this->render('admin/createProduct.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
      * @Route("/admin/product/delete/{id}", name="app_admin_product_delete")
      */

    public function adminProductDelete(Product $product, EntityManagerInterface $manager) : Response 
    {
        $manager->remove($product);

        $manager->flush();

        return $this->redirectToRoute('app_admin');
    }
    
}