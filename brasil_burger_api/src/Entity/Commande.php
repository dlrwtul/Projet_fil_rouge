<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Controller\CommandeAction;
use App\Repository\CommandeRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
#[ApiResource(
    attributes: ["security" => "is_granted('ROLE_CLIENT')"],
    denormalizationContext: ['groups' => ['commande:write']],
    normalizationContext: ['groups' => ['commande:read']],
    collectionOperations: [
        'post' => [
            'controller' => CommandeAction::class
        ],
        'get' =>[
            "security" => "is_granted('ROLE_VISITER')"
        ]
    ],
    itemOperations: [
        'get',
        'delete'
    ]
)]

#[ApiFilter(OrderFilter::class, properties: ['id', 'createdAt'], arguments: ['orderParameterName' => 'order'])]
#[ApiFilter(SearchFilter::class, properties: ['zone.libelle' => 'partial','etat' => 'exact'])]

class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(["commande:read"])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(["commande:read"])]
    private $numero;

    #[ORM\Column(type: 'datetime')]
    #[Groups(["commande:read"])]
    private $createdAt;

    #[ORM\Column(type: 'float')]
    #[Groups(["commande:read"])]
    private $montant;

    #[ORM\Column(type: 'boolean',nullable:false)]
    private $isEtat =true;

    #[ORM\ManyToOne(targetEntity: Zone::class, inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(["commande:read"])]
    private $zone;

    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(["commande:read"])]
    private $client;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'commandes')]
    private $user;

    #[ORM\OneToMany(mappedBy: 'commande', targetEntity: CommandeProduit::class,cascade:["persist"])]
    #[Groups(["commande:read"/* ,"commande:write" */])]
    private $commandeProduits;

    #[ORM\ManyToOne(targetEntity: Livraison::class, inversedBy: 'commandes')]
    private $livraison;

    #[ORM\Column(type: 'string', length: 255)]
    private $etat;

    public function __construct()
    {
        $this->commandeProduits = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
        $this->etat = "en cours";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

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


    public function getZone(): ?Zone
    {
        return $this->zone;
    }

    public function setZone(?Zone $zone): self
    {
        $this->zone = $zone;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

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

    /**
     * @return Collection<int, CommandeProduit>
     */
    public function getCommandeProduits(): Collection
    {
        return $this->commandeProduits;
    }

    public function addCommandeProduit(Produit $produit,int $quantite): self
    {
        $commandeProduit = new CommandeProduit($produit,$quantite);
        if (!$this->commandeProduits->contains($commandeProduit)) {
            $commandeProduit->setCommande($this);
            $this->commandeProduits[] = $commandeProduit;
        }

        return $this;
    }

    public function removeCommandeProduit(CommandeProduit $commandeProduit): self
    {
        if ($this->commandeProduits->removeElement($commandeProduit)) {
            // set the owning side to null (unless already changed)
            if ($commandeProduit->getCommande() === $this) {
                $commandeProduit->setCommande(null);
            }
        }

        return $this;
    }

    public function getLivraison(): ?Livraison
    {
        return $this->livraison;
    }

    public function setLivraison(?Livraison $livraison): self
    {
        $this->livraison = $livraison;

        return $this;
    }
    
    public function generateNumero($count){
        $date = new \DateTime;
        $numero = $date->format("d").$date->format("m").$count;
        return $numero;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
}
