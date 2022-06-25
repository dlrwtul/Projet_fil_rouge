<?php

namespace App\Entity;

use App\Entity\Boisson;
use App\Entity\Produit;
use App\Entity\Complement;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\TailleRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\Unique;

#[ORM\Entity(repositoryClass: TailleRepository::class)]
#[ApiResource(
    attributes: ["security" => "is_granted('ROLE_GESTIONNAIRE')"],
    denormalizationContext: ['groups' => ['taille:write']],
    normalizationContext: ['groups' => ['taille:write']],
    /* subresourceOperations: [
        'api_boissons_taille_get_subresource' => [
            'method' => 'GET',
            'normalization_context' => ['groups' => ['taille:write']],
        ],
    ], */
    collectionOperations: [
        'post',
    ],
    itemOperations: [
        'get',
        'put',
        'delete'
    ]
)]
class Taille
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255,unique:true)]
    #[Assert\NotBlank(message:"libelle obligatoire")]
    #[Groups(["taille:write","boisson:read"])]
    private $libelle;

    #[ORM\Column(type: 'float')]
    #[Assert\NotBlank(message:"prix obligatoire")]
    #[Groups(["taille:write","boisson:read"])]
    private $prix;

    #[ORM\ManyToMany(targetEntity: Boisson::class, inversedBy: 'tailles')]
    private $boissons;

    #[ORM\ManyToOne(targetEntity: Complement::class, inversedBy: 'tailles')]
    private $complement;

    public function __construct()
    {
        $this->boissons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return Collection<int, Boisson>
     */
    public function getBoissons(): Collection
    {
        return $this->boissons;
    }

    public function addBoisson(Boisson $boisson): self
    {
        if (!$this->boissons->contains($boisson)) {
            $this->boissons[] = $boisson;
        }

        return $this;
    }

    public function removeBoisson(Boisson $boisson): self
    {
        $this->boissons->removeElement($boisson);

        return $this;
    }

    public function getComplement(): ?Complement
    {
        return $this->complement;
    }

    public function setComplement(?Complement $complement): self
    {
        $this->complement = $complement;

        return $this;
    }
}