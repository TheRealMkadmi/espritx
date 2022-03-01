<?php

namespace App\Entity;

use App\Repository\ServiceRequestRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
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
     * @Groups ("Request")
     */
    private $Title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups ("Request")
     */
    private $Description;

    /**
     * @ORM\ManyToOne(targetEntity=Service::class, inversedBy="serviceRequests")
     * @ORM\JoinColumn(nullable=false)
     * @Groups ("Request")
     */
    private $Type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
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

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups ("Request")
     */
    private $Status = "Unseen";

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $RequestResponse;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="serviceRequests")
     * @ORM\JoinColumn(nullable=true)
     * @Groups ("Service")
     * @Groups ("Request")
     */
    private $Requester;

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

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(string $Status): self
    {
        $this->Status = $Status;

        return $this;
    }

    public function getRequestResponse(): ?string
    {
        return $this->RequestResponse;
    }

    public function setRequestResponse(?string $RequestResponse): self
    {
        $this->RequestResponse = $RequestResponse;

        return $this;
    }

    public function getRequester(): ?User
    {
        return $this->Requester;
    }

    public function setRequester(?User $Requester): self
    {
        $this->Requester = $Requester;

        return $this;
    }
}
