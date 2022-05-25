<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
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
     * @Route("/login", name="app_login")
     */
    public function login(Request $request, UserRepository $userRepository, UserPasswordEncoderInterface $check): Response
    {

        $loginData = json_decode($request->getContent(), true);
        
        $emailToCheck = $loginData['email'];

        $passwordToCheck = $loginData['password'];

        $user = $userRepository->findByEmail($emailToCheck);

        if(count($user) === 0){

            $message = 'Vous devez créer un compte pour vous connecter';

            return $this->json([ $message ]);

        }

        $pass = $user[0]->getPassword();

        $passIsValid = $check->isPasswordValid($user[0], $passwordToCheck);

        if(!$passIsValid){
            $message = 'Le mot de passe ne correspond pas';

            return $this->json([ $message ]);
        }

        $session = new Session();
        $session->start();

        $session->set('user', $user[0]);

        


        return $this->json($session,200, [],['groups' => 'user:read']);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        
    }

}