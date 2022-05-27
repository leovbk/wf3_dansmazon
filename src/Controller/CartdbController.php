<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Form\CartType;
use App\Repository\CartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cartdb")
 */
class CartdbController extends AbstractController
{
    /**
     * @Route("/", name="app_cartdb_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $carts = $entityManager
            ->getRepository(Cart::class)
            ->findAll();

        return $this->render('cartdb/index.html.twig', [
            'carts' => $carts,
        ]);
    }

    /**
     * @Route("/new", name="app_cartdb_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cart = new Cart();
        $form = $this->createForm(CartType::class, $cart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($cart);
            $entityManager->flush();

            return $this->redirectToRoute('app_cartdb_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cartdb/new.html.twig', [
            'cart' => $cart,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_cartdb_show", methods={"GET"})
     */
    public function show(Cart $cart): Response
    {
        return $this->render('cartdb/show.html.twig', [
            'cart' => $cart,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_cartdb_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Cart $cart, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CartType::class, $cart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_cartdb_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cartdb/edit.html.twig', [
            'cart' => $cart,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_cartdb_delete", methods={"POST"})
     */
    public function delete(Request $request, Cart $cart, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cart->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cart);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_cartdb_index', [], Response::HTTP_SEE_OTHER);
    }
}
