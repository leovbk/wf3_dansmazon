<?php

namespace App\Controller;

use App\Service\Cart\CartService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    /**
    * @Route("/cart", name="app_cart")
    */
    public function index(CartService $cartService): Response
    {
        $panierWithData = $cartService->getFullCart();
        $total = $cartService->getTotal();

        return $this->render('cart/index.html.twig', [
            'items' =>  $cartService->getFullCart(),
            'total' => $cartService->getTotal()
        ]);
    }
    /**
    * @Route("/cart/add/{id}", name="cart_add")
    */

    public function add($id, CartService $cartService){

        $cartService->add($id);

        // $fullCart = $cartService->getFullCart();

        // return $this->json($fullCart,200, [],['groups' => 'product:read']);

        return $this->json('okok');
    }
    /**
    * @Route("/cart/remove/{id}", name="cart_remove")
    */


    public function remove($id, CartService $cartService) {

        $cartService->remove($id);

        return $this->redirectToRoute("app_cart");
    }
}