<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use http\Env\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ServiceRepository::class)
 */
class Service
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank(message="Veuillez ajouter un nom de service!")
     */
    private $Name;

    /**
     * @ORM\ManyToOne(targetEntity=Group::class, inversedBy="provided_services")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull(message="Veuillez sélectionnez un responsable pour ce service!")
     */
    private $Responsible;

    /**
     * @ORM\ManyToMany(targetEntity=Group::class, inversedBy="enjoyable_services")
     * @Assert\Count(min="1", minMessage="Sélectionnez au moins un bénéficaire de ce service!")
     */
    private $Recipient;

    /**
     * @ORM\OneToMany(targetEntity=ServiceRequest::class, mappedBy="Type")
     */
    private $serviceRequests;

    public function __construct()
    {
        $this->Recipient = new ArrayCollection();
        $this->serviceRequests = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getResponsible(): ?Group
    {
        return $this->Responsible;
    }

    public function setResponsible(?Group $Responsible): self
    {
        $this->Responsible = $Responsible;

        return $this;
    }

    /**
     * @return Collection|Group[]
     */
    public function getRecipient(): Collection
    {
        return $this->Recipient;
    }

    public function addRecipient(Group $recipient): self
    {
        if (!$this->Recipient->contains($recipient)) {
            $this->Recipient[] = $recipient;
        }

        return $this;
    }

    public function removeRecipient(Group $recipient): self
    {
        $this->Recipient->removeElement($recipient);

        return $this;
    }

    /**
     * @return Collection|ServiceRequest[]
     */
    public function getServiceRequests(): Collection
    {
        return $this->serviceRequests;
    }

    public function addServiceRequest(ServiceRequest $serviceRequest): self
    {
        if (!$this->serviceRequests->contains($serviceRequest)) {
            $this->serviceRequests[] = $serviceRequest;
            $serviceRequest->setType($this);
        }

        return $this;
    }

    public function removeServiceRequest(ServiceRequest $serviceRequest): self
    {
        if ($this->serviceRequests->removeElement($serviceRequest)) {
            // set the owning side to null (unless already changed)
            if ($serviceRequest->getType() === $this) {
                $serviceRequest->setType(null);
            }
        }

        return $this;
    }


    public function __toString(): string
    {
        return $this->getName();
    }
}
