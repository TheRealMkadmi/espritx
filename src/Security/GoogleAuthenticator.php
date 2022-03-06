<?php

namespace App\Security;

use App\Entity\User;

// your user entity
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\OAuth2ClientInterface;
use KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient;
use KnpU\OAuth2ClientBundle\Security\Authenticator\SocialAuthenticator;
use KnpU\OAuth2ClientBundle\Client\Provider\FacebookClient;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use League\OAuth2\Client\Provider\GoogleUser;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class GoogleAuthenticator extends SocialAuthenticator
{
  private $clientRegistry;
  private $em;
  private $router;

  public function __construct(ClientRegistry $clientRegistry, EntityManagerInterface $em, RouterInterface $router)
  {
    $this->clientRegistry = $clientRegistry;
    $this->em = $em;
    $this->router = $router;
  }

  public function supports(Request $request)
  {
    return $request->attributes->get('_route') === 'connect_google_check';
  }

  public function getCredentials(Request $request)
  {
    return $this->fetchAccessToken($this->getGoogleClient());
  }

  public function getUser($credentials, UserProviderInterface $userProvider)
  {
    /** @var GoogleUser $googleUser */
    $googleUser = $this->getGoogleClient()->fetchUserFromToken($credentials);

    $email = $googleUser->getEmail();

    // 1) have they logged in with Facebook before? Easy!
    $existingUser = $this->em->getRepository(User::class)
      ->findOneBy(['googleId' => $googleUser->getId()]);
    if ($existingUser) {
      return $existingUser;
    }
    // 2) do we have a matching user by email?
    $user = $this->em->getRepository(User::class)
      ->findOneBy(['email' => $email]);

    // 3) Maybe you just want to "register" them by creating
    // a User object
    $user->setGoogleId($googleUser->getId());
    $this->em->persist($user);
    $this->em->flush();

    return $user;
  }

  private function getGoogleClient(): OAuth2ClientInterface
  {
    return $this->clientRegistry->getClient('google');
  }

  public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
  {
    // change "app_homepage" to some route in your app
    $targetUrl = $this->router->generate('app_home');

    return new RedirectResponse($targetUrl);
    // or, on success, let the request continue to be handled by the controller
    //return null;
  }

  public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
  {
    $message = strtr($exception->getMessageKey(), $exception->getMessageData());

    return new Response($message, Response::HTTP_FORBIDDEN);
  }

  /**
   * Called when authentication is needed, but it's not sent.
   * This redirects to the 'login'.
   */
  public function start(Request $request, AuthenticationException $authException = null)
  {
    return new RedirectResponse(
      '/connect/', // might be the site, where users choose their oauth provider
      Response::HTTP_TEMPORARY_REDIRECT
    );
  }

  // ...
}