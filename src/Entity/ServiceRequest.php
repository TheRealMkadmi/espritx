<?php

namespace App\Entity;

use App\Repository\ServiceRequestRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotNull (message="Ce champ ne peut pas être nul")
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

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message="Veuillez introduire un email valide",
     * normalizer="trim")
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Image(notFoundMessage="Image intruvable",
     * maxSize="2M", maxSizeMessage="L'image ne doit pas dépasser pas le {{limit}} {{suffix}}!",
     * uploadErrorMessage="Problème lors du téléchargement du fichier!")
     */
    private $Picture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\File(notFoundMessage="Fichier introuvable",
     * maxSize="5M", maxSizeMessage="Le fichier ne doit pas dépasser pas le {{limit}} {{suffix}}!",
     * uploadErrorMessage="Problème lors du téléchargement du fichier!")
     */
    private $Attachements;

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

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->Picture;
    }

    public function setPicture(?string $Picture): self
    {
        $this->Picture = $Picture;

        return $this;
    }

    public function getAttachements(): ?string
    {
        return $this->Attachements;
    }

    public function setAttachements(?string $Attachements): self
    {
        $this->Attachements = $Attachements;

        return $this;
    }
}
