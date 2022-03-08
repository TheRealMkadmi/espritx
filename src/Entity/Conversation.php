<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConversationRepository")
 * @ORM\Table(indexes={@Index(name="last_message_id_index", columns={"last_message_id"})})
 */
class Conversation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="participants")
     */
    private $participant1;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="participants")
     */
    private $participant2;

    /**
     * @ORM\OneToOne(targetEntity="Message")
     * @ORM\JoinColumn(name="last_message_id", referencedColumnName="id")
     */
    private $lastMessage;

    /**
     * @ORM\OneToMany(targetEntity="Message", mappedBy="conversation")
     */
    private $messages;



    public function getId(): ?int
    {
        return $this->id;
    }



    public function getLastMessage(): ?Message
    {
        return $this->lastMessage;
    }

    public function setLastMessage(?Message $lastMessage): self
    {
        $this->lastMessage = $lastMessage;

        return $this;
    }

    /**
     * @return Collection|Message[]
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function getparticipant1(): ?User
    {
        return $this->participant1;
    }
    public function setparticipant1(?User $user): self
    {
        $this->participant1 = $user;

        return $this;
    }


    public function getparticipant2(): ?User
    {
        return $this->participant2;
    }

    public function setparticipant2(?User $user): self
    {
        $this->participant2 = $user;

        return $this;
    }




}
