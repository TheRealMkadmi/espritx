<?php

namespace App\Entity;

use App\Repository\ConversationThreadRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ConversationThreadRepository::class)
 */
class ConversationThread
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @Assert\NotNull
     * @ORM\Column(type="string", length=255)
     */
    private $user1;

    /**
     * @Assert\NotNull
     * @ORM\Column(type="string", length=255)
     */
    private $user2;

    /**
     * @ORM\OneToMany(targetEntity=Messages::class, mappedBy="Relat")
     */
    private $messages;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */
    private $email2;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Chateph;

    public function __construct()
    {
        $this->messages = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getUser1(): ?string
    {
        return $this->user1;
    }

    public function setUser1(string $user): self
    {
        $this->user1 = $user;

        return $this;
    }
    public function getUser2(): ?string
    {
        return $this->user2;
    }

    public function setUser2(string $user): self
    {
        $this->user2 = $user;

        return $this;
    }

    /**
     * @return Collection<int, Messages>
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Messages $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages[] = $message;
            $message->setRelat($this);
        }

        return $this;
    }

    public function removeMessage(Messages $message): self
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getRelat() === $this) {
                $message->setRelat(null);
            }
        }

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getEmail2(): ?string
    {
        return $this->email2;
    }

    public function setEmail2(string $email2): self
    {
        $this->email2 = $email2;

        return $this;
    }

    public function getChateph(): ?bool
    {
        return $this->Chateph;
    }

    public function setChateph(bool $Chateph): self
    {
        $this->Chateph = $Chateph;

        return $this;
    }
}