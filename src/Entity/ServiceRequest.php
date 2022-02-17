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

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\ManyToOne(targetEntity=Service::class, inversedBy="serviceRequests")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Type;

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

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getType(): ?Service
    {
        return $this->Type;
    }

    public function setType(?Service $Type): self
    {
        $this->Type = $Type;

        return $this;
    }
}
