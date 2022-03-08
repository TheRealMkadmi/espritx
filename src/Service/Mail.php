<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
class Mail{

    private $mailer;
    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }
 
    public function sendNewEventEmail($toMail , array $var)
    {
        $email = (new TemplatedEmail())
            ->from("mohamedaziz.belhaj@esprit.tn")
            ->to($toMail)
            ->subject('You have new event')
            ->htmlTemplate('email/event.html.twig')
            ->context(
                $var
            );
        $this->mailer->send($email);
    }

    public function sendNewCallEmail($toMail , array $var)
    {
        $email = (new TemplatedEmail())
            ->from("mohamedaziz.belhaj@esprit.tn")
            ->to($toMail)
            ->subject('You have new call')
            ->htmlTemplate('email/call.html.twig')
            ->context(
                $var
            );
        $this->mailer->send($email);
    }
}