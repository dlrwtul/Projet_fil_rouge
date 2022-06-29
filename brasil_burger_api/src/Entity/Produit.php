<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProduitRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name: "type", type: "string")]
#[ORM\DiscriminatorMap(["burger" => "Burger", "boisson" => "Boisson", "portion_frites" => "PortionFrites","menu" => "Menu"])]

class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups("product:read","taille:read","commande:read")]
    protected $id;

    #[ORM\Column(type: 'string', length: 255,unique: true )]
    #[Assert\NotBlank(message:"Nom obligatoire")]
    #[Groups(["product:write",'menu:self:update',"taille:read","commande:read","boisson:read"])]
    private $nom;

    /* #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message:"Image obligatoire")]
    #[Groups(["product:write",'menu:self:update',"commande:read","boisson:read","taille:read"])]
    private $image; */

    #[ORM\Column(type: 'blob')]
    #[Assert\NotBlank(message:"Image obligatoire")]
    #[Groups(["product:write",'menu:self:update',"commande:read","boisson:read","taille:read"])]
    private $image;

    #[ORM\Column(type: 'float',nullable: true)]
    #[Assert\Positive(message:"prix superieure a 0")]
    #[Groups("product:write","taille:read","commande:read")]
    private $prix;

    #[ORM\Column(type: 'boolean')]
    protected $isEtat=true ;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'produits')]
    private $user;

    #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'produits')]
    private $commande;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: CommandeProduit::class)]
    private $commandeProduits;

    public function __construct() {
        $this->isEtat = true;
        $this->commandeProduits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getImage()
    {
        return is_resource($this->image) ? stream_get_contents($this->image) : $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    /* public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    } */

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * @return Collection<int, CommandeProduit>
     */
    public function getCommandeProduits(): Collection
    {
        return $this->commandeProduits;
    }

    public function addCommandeProduit(CommandeProduit $commandeProduit): self
    {
        if (!$this->commandeProduits->contains($commandeProduit)) {
            $this->commandeProduits[] = $commandeProduit;
            $commandeProduit->setProduit($this);
        }

        return $this;
    }

    public function removeCommandeProduit(CommandeProduit $commandeProduit): self
    {
        if ($this->commandeProduits->removeElement($commandeProduit)) {
            // set the owning side to null (unless already changed)
            if ($commandeProduit->getProduit() === $this) {
                $commandeProduit->setProduit(null);
            }
        }

        return $this;
    }

}
