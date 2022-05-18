<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */

    public function registration(Request $request, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder ){
        
        $formData = json_decode($request->getContent(), true);
        
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        $form->submit($formData);

        if($form->isSubmitted() && $form->isValid()){

            $user->setEmail($formData['email']);
            $user->setUsername($formData['username']);
            $user->setAddress($formData['address']);
            $user->setPostalcode($formData['postalcode']);
            $user->setCity($formData['city']);
            $user->setUserfirstname($formData['userfirstname']);

            $hash = $encoder->encodePassword($user, $formData["password"]);

            $user->setPassword($hash);
            
            $em->persist($user);

            $em->flush();
            
            return $this->json(true, 200);

        } else {

            $error = $form->getErrors(true, false);

            return $this->json($error);

        }

            
    }

    /**
     * @Route("/connexion", name="security_login")
     */

     public function login(){
         return $this->render('security/login.html.twig');
     }

     /**
      * @Route("/deconnexion", name="security_logout")
      */

      public function logout(){
          
      }
}