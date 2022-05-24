<?php

namespace App\Controller;

use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MailerController extends AbstractController
{
    /**
     * @Route("/email", name="app_mailer")
     */
    public function sendEmail(Request $request,MailerInterface $mailer): Response
    {
        $content = json_decode($request->getContent(), true);

        
        $email = (new Email())
            ->from($content['email'])
            ->to('contact@dansmazon.com')
            ->subject('Nouveau message de : '.$content['username'])
            ->text($content['message']);

        $mailer->send($email);

        return $this->json(true, 200);    
    }
}