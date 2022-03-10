<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/contacts")
 */
class ContactsController extends AbstractController
{
  public function __construct(private EntityManagerInterface $entityManager)
  {
  }

  /**
   * @Route("/add/{id}", name="add_contact")
   * @ParamConverter("user", class="App\Entity\User")
   */
  public function add_contact(Request $request, User $user)
  {
    $this->getUser()->addContact($user);
    $this->entityManager->flush();

  }

  /**
   * @Route("/add/{id}", name="remove_contact")
   * @ParamConverter("user", class="App\Entity\User")
   */
  public function remove_contact(Request $request, User $user)
  {
    $this->getUser()->removeContact($user);
    $this->entityManager->flush();

  }
}