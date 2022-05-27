<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Service\Cart\CartService;
use App\Repository\CartRepository;

use App\Repository\UserRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    /**
    * @Route("/cart", name="app_cart")
    */
    public function index(Request $request, CartRepository $cartRepository): Response
    {
        $content = $request->request;

        $carts = $cartRepository->findByUserId($content->get('user_id'));
        return $this->json($carts,200, [],['groups' => 'cart:read']);
    }
    /**
    * @Route("/cart/add", name="cart_add")
    */

    public function add(Request $request, CartRepository $cartRepository, UserRepository $userRepository, ProductRepository $productRepository, EntityManagerInterface $manager ){

        $user_id = $request->request->get('user_id');

        

        $product_id = $request->request->get('product_id');

        

        $cartProductObject = $cartRepository->findByUserIdProductId($user_id, $product_id);

        

        if(empty($cartProductObject)){
            $cart = new Cart();
            $user = $userRepository->find($user_id);          
            $product = $productRepository->find($product_id);            
            $cart->setProduct($product);          
            $cart->setUser($user);
            $cart->setQuantity(1);
            $manager->persist($cart);
            $manager->flush();
        } else {    
            $idCart = $cartProductObject[0]->getId();
            $cartProduct = $cartRepository->find($idCart);
            $quantity = $cartProduct->getQuantity();
            $quantity++;
            $cartProduct->setQuantity($quantity);
            $manager->persist($cartProduct);
            $manager->flush();
        }

        

        $newCarts = $cartRepository->findByUserId($user_id);

        return $this->json($newCarts,200, [],['groups' => 'cart:read']);
    }
    /**
    * @Route("/cart/remove", name="cart_remove")
    */


    public function remove(Request $request, CartRepository $cartRepository, UserRepository $userRepository, ProductRepository $productRepository, EntityManagerInterface $manager) {

        $user_id = $request->request->get('user_id');

        $product_id = $request->request->get('product_id');

        $cartProductObject = $cartRepository->findByUserIdProductId($user_id, $product_id);

        $idCart = $cartProductObject[0]->getId();

        $cartProduct = $cartRepository->find($idCart);

        $quantity = $cartProduct->getQuantity();

        $quantity--;

        if($quantity <= 0) {
            $manager->remove($cartProduct);
            $manager->flush();
        } else {
            $cartProduct->setQuantity($quantity);
            $manager->persist($cartProduct);       
            $manager->flush();
        }

        $newCarts = $cartRepository->findByUserId($user_id);

        return $this->json($newCarts,200, [],['groups' => 'cart:read']);
    }

    /**
    * @Route("/cart/delete", name="cart_remove")
    */


    public function delete(Request $request, CartRepository $cartRepository, UserRepository $userRepository, ProductRepository $productRepository, EntityManagerInterface $manager) {

        $user_id = $request->request->get('user_id');

        $product_id = $request->request->get('product_id');

        $cartProductObject = $cartRepository->findByUserIdProductId($user_id, $product_id);

        $idCart = $cartProductObject[0]->getId();

        $cartProduct = $cartRepository->find($idCart);

        $manager->remove($cartProduct);

        $manager->flush();

        return $this->json(true, 200);
    }
}