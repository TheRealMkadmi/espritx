<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @Route ("/account")
 */
class AccountController extends AbstractController
{
    /**
     * @Route("/edit", name="acc_settings")
     */
    public function EditAccount(Request $request,EntityManagerInterface $entityManager): Response
    {
        $user=$this->getUser();
        $form = $this->createForm(UserType::class, $user);
        $form->remove('email');
        $form->remove('class');
        $form->remove('plainPassword');
        $form->remove('groups');
        $form->remove('individualPermissions');
        $form->remove('userStatus');
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('acc_settings', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('views/content/apps/user/account/page-account-settings-account.html.twig', [
            'form'=>$form->createView(),
            'user'=>$user,
        ]);
    }

    /**
     * @Route ("/editpwd", name="acc_pwd")
     */
    public function EditPwd(Request $request,EntityManagerInterface $entityManager,UserPasswordEncoderInterface $userPasswordEncoder): Response
    {
        $user=$this->getUser();
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->add('currentPassowrd', PasswordType::class, [
            'constraints' => [
                new UserPassword([
                    'message' => 'Wrong Password',
                ]),
            ],
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $encodedPassword = $userPasswordEncoder->encodePassword(
                $user,
                $form->get('plainPassword')->getData()
            );
            $user->setPassword($encodedPassword);
            $entityManager->flush();
            return $this->redirectToRoute('acc_settings', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('views/content/apps/user/account/page-account-settings-security.html.twig',[
            'resetForm'=>$form->createView(),
        ]);
    }
}
