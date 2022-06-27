<?php

namespace App\Entity;

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
    #[Groups("product:read","taille:read")]
    protected $id;

    #[ORM\Column(type: 'string', length: 255,unique: true )]
    #[Assert\NotBlank(message:"Nom obligatoire")]
    #[Groups(["product:write",'menu:self:update',"taille:read"])]
    private $nom;

    /* #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message:"Image obligatoire")]
    #[Groups(["product:write",'menu:self:update'])]
    private $image; */

    #[ORM\Column(type: 'blob')]
    #[Assert\NotBlank(message:"Image obligatoire")]
    #[Groups(["product:write",'menu:self:update',"taille:read"])]
    private $image;

    #[ORM\Column(type: 'float',nullable: true)]
    #[Assert\Positive(message:"prix superieure a 0")]
    #[Groups("product:write","taille:read")]
    private $prix;

    #[ORM\Column(type: 'boolean')]
    private $isEtat ;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'produits')]
    private $user;

    public function __construct() {
        $this->isEtat = true;
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
    }
 */
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

}
