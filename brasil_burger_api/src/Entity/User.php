<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\UserRepository;
use App\Controller\RegistrationsController;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ApiResource(
    denormalizationContext: ['groups' => ['user:write']],
    normalizationContext: ['groups' => ['user:read']],
    collectionOperations:[
        'get',
        'registration' => [
            'method' => 'POST',
            'path' => '/register',
            'controller' => RegistrationsController::class,
        ]
    ],
    itemOperations:[
        'get',
        'put' => [
            'denormalization_context' => ['groups' => ["user:update"]]
        ]
    ]
)]

#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap(["user" , "User","client" => "Client", "livreur" => "Livreur"])]

class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups("user:read")]
    protected $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    #[Assert\NotBlank(message:"login is required")]
    #[Assert\Email(message:"Enter an email address")]
    #[Groups(["user:write","user:read"])]
    protected $login;

    #[ORM\Column(type: 'json')]
    protected $roles = [];

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank(message:"password is required")]
    #[Groups("user:write")]
    protected $password;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message:"nom is required")]
    #[Groups(["user:write","user:read","user:update"])]
    protected $nom;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message:"prenom is required")]
    #[Groups(["user:write","user:read","user:update"])]
    protected $prenom;

    #[ORM\Column(type: 'boolean')]
    protected $isEtat;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotBlank(message:"password confirm is required")]
    #[Groups("user:write")]
    protected $confirmPassword;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Produit::class)]
    private $produits;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups("user:telephone")]
    private $telephone;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
        $this->roles = array("ROLE_GESTIONNAIRE");
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->login;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_VISITER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function isIsEtat(): ?bool
    {
        return $this->isEtat;
    }

    public function setIsEtat(bool $isEtat): self
    {
        $this->isEtat = $isEtat;

        return $this;
    }

    public function getConfirmPassword(): ?string
    {
        return $this->confirmPassword;
    }

    public function setConfirmPassword(?string $confirmPassword): self
    {
        $this->confirmPassword = $confirmPassword;

        return $this;
    }


    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setUser($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getUser() === $this) {
                $produit->setUser(null);
            }
        }

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }
}
