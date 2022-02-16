<?php

namespace App\Entity;

use App\Repository\ServiceRequestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiceRequestRepository::class)
 */
class ServiceRequest
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $Created_At;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $RespondedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->Created_At;
    }

    public function setCreatedAt(?\DateTimeImmutable $Created_At): self
    {
        $this->Created_At = $Created_At;

        return $this;
    }

    public function getRespondedAt(): ?\DateTimeImmutable
    {
        return $this->RespondedAt;
    }

    public function setRespondedAt(?\DateTimeImmutable $RespondedAt): self
    {
        $this->RespondedAt = $RespondedAt;

        return $this;
    }
}
