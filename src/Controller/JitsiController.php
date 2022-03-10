<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JitsiController extends AbstractController
{
    /**
     * @Route("/jitsi", name="app_jitsi")
     */
    public function index(): Response
    {
        return $this->render('jitsi/index.html.twig', [
            'controller_name' => 'JitsiController',
        ]);
    }
}
