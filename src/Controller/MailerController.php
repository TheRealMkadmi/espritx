<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailerController extends AbstractController
{
    /**
     * @Route("/mailer", name="app_mailer")
     */
    public function index(MailerInterface $mailer): Response
    {
$email=(new Email())->from('hello@inbox.mailtrap.io')
    ->to('you@inbox.mailtrap.io')
    ->subject('Time for Symfony Mailer!')
    ->text('Sending emails is fun again!');
    $mailer->send($email);
        return $this->render('mailer/index.html.twig', [
            'controller_name' => 'MailerController',
        ]);
    } 
}
