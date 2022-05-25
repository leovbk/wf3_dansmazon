<?php

namespace App\Service\Cart;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService {

    protected $session;
    protected $productRepo;

    public function __construct( SessionInterface $session, ProductRepository $productRepo) {
        $this->session = $session;
        $this->productRepo = $productRepo;
    }

    public function add(int $id) {
        //$session = $this->session->getSession();
        
        $panier = $this->session->get('panier', []);

        if(!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        $this->session->set('panier', $panier);
}

    public function remove(int $id) {
        
        $panier = $this->session->get('panier', []);

        if(!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $this->session->set('panier', $panier);
    }

    public function getFullCart() : array {
        $panier = $this->session->get('panier', []);

        $panierWithData = [];

        foreach($panier as $id => $quantity) {
            $panierWithData [] = [
                'product' => $this->productRepo->find($id),
                'quantity' => $quantity
            ];
        }

        dd($panier);

        return $panierWithData;
    }

    public function getTotal() : float {
        $total = 0;
        

        foreach ($this->getFullCart() as $item) {
            
            $total += $item['product']->getPrice() * $item['quantity'];
        }

        return $total;
    }
}