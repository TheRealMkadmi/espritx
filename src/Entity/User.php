<?php

namespace App\Entity;

use App\Enum\DocumentIdentityTypeEnum;
use App\Enum\UserStatus;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\PersistentCollection;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Symfony\Component\Security\Core\User\{EquatableInterface, UserInterface};

/**
 * This entity violates just a bit the design paradigm of Doctrine. We're going the ActiveRecord way for ergonomics.
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 * @ORM\HasLifecycleCallbacks
 */
class User implements UserInterface, EquatableInterface
{
  use TimestampableEntity;

  public function __construct()
  {
    $this->individualPermissions = new ArrayCollection();
    $this->posts = new ArrayCollection();
    $this->groups = new ArrayCollection();
    $this->userStatus = UserStatus::get(UserStatus::PENDING);
    $this->commentaires = new ArrayCollection();
    $this->likes = new ArrayCollection();
  }

  //<editor-fold desc="id">
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(type="integer")
   */
  private $id;

  public function getId(): ?int
  {
    return $this->id;
  }
  //</editor-fold>
  //<editor-fold desc="First Name">
  /**
   * @ORM\Column(type="string", length=20)
   */
  private string $first_name;

  public function getFirstName(): string
  {
    return $this->first_name;
  }

  public function setFirstName(string $first_name): self
  {
    $this->first_name = $first_name;
    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="Last Name">
  /**
   * @ORM\Column(type="string", length=25)
   */
  private string $last_name;

  public function getLastName(): string
  {
    return $this->last_name;
  }

  public function setLastName(string $last_name): self
  {
    $this->last_name = $last_name;
    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="Email">
  /**
   * @var string
   * @ORM\Column(type="string", unique=true)
   */
  protected string $email;

  public function getEmail(): ?string
  {
    return $this->email;
  }

  public function setEmail($email): static
  {
    $this->email = $email;
    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="Phone Number">
  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   */
  private $phonenumber;
  public function getPhonenumber(): ?string
  {
    return $this->phonenumber;
  }

  public function setPhonenumber(?string $phonenumber): self
  {
    $this->phonenumber = $phonenumber;

    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="Class">
  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   */
  private $class;

  public function getClass(): ?string
  {
    return $this->class;
  }

  public function setClass(?string $class): self
  {
    $this->class = $class;

    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="PlainPassword">
  protected ?string $plainTextPassword;

  public function setPlainPassword(?string $password)
  {
    $this->plainPassword = $password;

    return $this;
  }

  public function getPlainTextPassword(): ?string
  {
    return $this->plainTextPassword;
  }
  //</editor-fold>
  //<editor-fold desc="Password">
  /**
   * @var string The hashed password
   * @ORM\Column(type="string")
   */
  private $password;

  /**
   * @see UserInterface
   */
  public function getPassword(): ?string
  {
    return $this->password;
  }

  public function setPassword(string $password): self
  {
    $this->password = $password;
    return $this;
  }

  public function getSalt()
  {
    return null; // todo: for now.
  }

  //</editor-fold>
  //<editor-fold desc="LastLogin">
  /**
   * @ORM\Column(type="datetime", nullable=true)
   */
  protected ?\DateTime $last_login;

  public function getLastLogin(): ?\DateTime
  {
    return $this->last_login;
  }

  public function setLastLogin(\DateTime $time = null)
  {
    $this->last_login = $time;
    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="LastActive">
  /**
   * @ORM\Column(name="last_activity_at", type="datetime", nullable=true)
   */
  protected ?\DateTime $lastActivityAt;

  public function setLastActivityAt(\DateTime $lastActivityAt)
  {
    $this->lastActivityAt = $lastActivityAt;
  }

  public function getLastActivityAt(): ?\DateTime
  {
    return $this->lastActivityAt;
  }

  public function isActiveNow(): bool
  {
    $delay = new \DateTime('1 minutes ago');
    return ($this->getLastActivityAt() > $delay);
  }
  //</editor-fold>
  //<editor-fold desc="ConfirmationToken">
  /**
   * @Column(type="string", nullable=true)
   */
  protected ?string $confirmationToken;

  public function getConfirmationToken(): ?string
  {
    return $this->confirmationToken;
  }

  public function setConfirmationToken(string $confirmationToken)
  {
    $this->confirmationToken = $confirmationToken;

    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="PasswordRequestedAt">
  /**
   * @ORM\Column(type="datetime", nullable=true)
   */
  protected ?\DateTime $passwordRequestedAt;

  public function setPasswordRequestedAt(\DateTime $date = null): static
  {
    $this->passwordRequestedAt = $date;
    return $this;
  }

  public function getPasswordRequestedAt(): ?\DateTime
  {
    return $this->passwordRequestedAt;
  }
  //</editor-fold>
  //<editor-fold desc="UserStatus">
  /**
   * @ORM\Column(type="userstatus")
   */
  protected UserStatus $userStatus;

  public function getUserStatus(): UserStatus
  {
    return $this->userStatus;
  }

  public function setUserStatus(UserStatus $userStatus): self
  {
    $this->userStatus = $userStatus;
    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="Groups">
  /**
   * @ORM\ManyToMany(targetEntity=Group::class, inversedBy="members")
   */
  private ArrayCollection|array|PersistentCollection $groups;

  /**
   * @return Collection|Group[]
   */
  public function getGroups(): Collection|array
  {
    return $this->groups;
  }

  public function addGroup(Group $group): self
  {
    if (!$this->groups->contains($group)) {
      $this->groups[] = $group;
      $group->addMember($this);
    }
    return $this;
  }

  public function removeGroup(Group $group): self
  {
    $this->groups->removeElement($group);
    $group->removeMember($this);
    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="Permissions">
  /**
   * @ORM\ManyToMany(targetEntity=Permission::class, inversedBy="users")
   */
  private Collection|array $individualPermissions;

  /**
   * @return Collection|Permission[]
   */
  public function getIndividualPermissions(): Collection
  {
    return $this->individualPermissions;
  }

  public function addIndividualPermission(Permission $permission): self
  {
    if (!$this->individualPermissions->contains($permission)) {
      $this->individualPermissions[] = $permission;
    }

    return $this;
  }

  public function removeIndividualPermission(Permission $permission): self
  {
    $this->individualPermissions->removeElement($permission);
    return $this;
  }

  /**
   * @return Collection<Permission>|array
   */
  public function getAggregatePermissions(): array|Collection
  {
    $perms = [];
    /** @var Group $group */
    foreach ($this->groups as $group) {
      foreach ($group->getPermissions() as $group_perm) {
        $group[] = $group_perm;
      }
    }
    foreach ($this->getIndividualPermissions() as $permission) {
      $perms[] = $permission;
    }
    return array_unique($perms);
  }
  //</editor-fold>
  //<editor-fold desc="Posts">

  /**
   * @ORM\OneToMany(targetEntity=Post::class, mappedBy="author", orphanRemoval=true)
   */
  private Collection $posts;



  /**
   * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="user")
   */
  private $commentaires;

  /**
   * @return Collection|Post[]
   */
  public function getPosts(): Collection|array
  {
    return $this->posts;
  }

  public function addPost(Post $post): self
  {
    if (!$this->posts->contains($post)) {
      $this->posts[] = $post;
      $post->setUser($this);
    }

    return $this;
  }

  public function removePost(Post $post): self
  {
    if ($this->posts->removeElement($post)) {
      // set the owning side to null (unless already changed)
      if ($post->getUser() === $this) {
        $post->setUser(null);
      }
    }
    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="DocIdentityType">
  /**
   * @ORM\Column(type="identitydoctype")
   */
  protected DocumentIdentityTypeEnum $identityType;

  public function getIdentityType(): DocumentIdentityTypeEnum
  {
    return $this->identityType;
  }

  public function setIdentityType(DocumentIdentityTypeEnum $identityType): self
  {
    $this->identityType = $identityType;
    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="Identity Document Number">
  /**
   * @ORM\Column(type="string", length=8, nullable=true)
   */
  private $identityDocumentNumber;

  /**
   * @ORM\OneToMany(targetEntity=PostLike::class, mappedBy="user")
   */
  private $likes;

  public function getIdentityDocumentNumber(): ?string
  {
    return $this->identityDocumentNumber;
  }

  public function setIdentityDocumentNumber(?string $identityDocumentNumber): self
  {
    $this->identityDocumentNumber = $identityDocumentNumber;
    return $this;
  }
  //</editor-fold>
  //<editor-fold desc="UserInterface">
  /**
   * @see UserInterface
   */
  public function eraseCredentials()
  {
    $this->plainTextPassword = null;
  }

  public function getUsername(): string
  {
    return $this->email;
  }

  public function getRoles()
  {
    /** @var Group $g */
    return array_map(static fn($g) => $g->getSecurityTitle(), $this->groups->toArray());
  }

  //</editor-fold>
  public function isEqualTo(UserInterface $user)
  {
    return $this->getUsername() === $user->getUsername();
    // do we add check for password; or delegate the username uniqueness constraint to the database?
  }

  public function __toString(): string
  {
    return $this->email;
  }



  /**
   * @return Collection|Commentaire[]
   */
  public function getCommentaires(): Collection
  {
      return $this->commentaires;
  }

  public function addCommentaire(Commentaire $commentaire): self
  {
      if (!$this->commentaires->contains($commentaire)) {
          $this->commentaires[] = $commentaire;
          $commentaire->setUser($this);
      }

      return $this;
  }

  public function removeCommentaire(Commentaire $commentaire): self
  {
      if ($this->commentaires->removeElement($commentaire)) {
          // set the owning side to null (unless already changed)
          if ($commentaire->getUser() === $this) {
              $commentaire->setUser(null);
          }
      }

      return $this;
  }

  /**
   * @return Collection|PostLike[]
   */
  public function getLikes(): Collection
  {
      return $this->likes;
  }

  public function addLike(PostLike $like): self
  {
      if (!$this->likes->contains($like)) {
          $this->likes[] = $like;
          $like->setUser($this);
      }

      return $this;
  }

  public function removeLike(PostLike $like): self
  {
      if ($this->likes->removeElement($like)) {
          // set the owning side to null (unless already changed)
          if ($like->getUser() === $this) {
              $like->setUser(null);
          }
      }

      return $this;
  }

}
