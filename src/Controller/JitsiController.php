<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\NotificationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JitsiController extends AbstractController
{
    /**
     * @Route("/jitsi", name="app_jitsi")
     */
    public function index(NotificationService $notify): Response
    {
$notify->notifyUser($this->getUser());
        return $this->render('jitsi/index.html.twig', [
            'controller_name' => 'JitsiController',
        ]);
    }
    /**
     * @Route("/notifvideo/{id}",name="notif_video")"
     */
    public function notify(NotificationService $notify,int $id){
        $url="http://127.0.0.1:8000/chat/".$id;
        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $notify->notifyUser($user,"Video Chat","Voulez vous lancez l'appel video ?","https://jitsi.espritx.xyz/PiDev",true);
        return $this->redirect($url);
    }
}
