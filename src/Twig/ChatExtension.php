<?php

namespace App\Twig;

use App\Entity\User;
use Doctrine\ORM\PersistentCollection;
use FontLib\TrueType\Collection;
use JetBrains\PhpStorm\Pure;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ChatExtension extends AbstractExtension
{
    private const CLAMP_LIMIT = 32;

    public function getFunctions()
    {
        return [
            new TwigFunction('getFirstNonCurrentUser', [$this, 'getFirstNonCurrentUser']),
            new TwigFunction('makeNameFromGroupChatParticipants', [$this, 'makeNameFromGroupChatParticipants']),
        ];
    }

    public function getFirstNonCurrentUser(User $user, $participants): User
    {
        foreach ($participants as $participant) {
            if ($participant !== $user) {
                return $participant;
            }
        }
        throw new \RuntimeException("This conversation has only one party. Are you okay?");
    }

    /**
     * @param Collection<User> $participants
     */
    public function makeNameFromGroupChatParticipants(User $user, $participants): string
    {
        if (count($participants) > 2) {
            $anchor = "Chat with ";
            /** @var User $participant */
            foreach ($participants as $participant) {
                $anchor .= $participant->getFirstName() . " " . $participant->getLastName();
            }
            if (strlen($anchor) > self::CLAMP_LIMIT)
                return substr($anchor, 0, self::CLAMP_LIMIT - 2) . "..";
            else return $anchor;
        } else {
            $second_party = $this->getFirstNonCurrentUser($user, $participants);
            return $second_party->getFirstName() . " " . $second_party->getLastName();
        }
    }
}

