<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CommandeBoissonTailleRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CommandeBoissonTailleRepository::class)]
#[ApiResource()]
class CommandeBoissonTaille extends CommandeProduit
{
    #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'commandeBoissonTailles')]
    private $commande;

    #[ORM\OneToOne(targetEntity: BoissonTaille::class)]
    #[Groups(["commande:write","commande:read","livraison:read"])]
    #[Groups(["commande:write","commande:read"])]
    private $boissonTaille;

    #[ORM\ManyToOne(targetEntity: Menu::class, inversedBy: 'commandeBoissonTaille')]
    private $menu;

    public function __construct(?BoissonTaille $boissonTaille,?int $quantite){
        $this->boissonTaille = $boissonTaille;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBoissonTaille(): ?BoissonTaille
    {
        return $this->boissonTaille;
    }

    public function setBoissonTaille(?BoissonTaille $boissonTaille): self
    {
        $this->boissonTaille = $boissonTaille;

        return $this;
    }

    public function getMenu(): ?Menu
    {
        return $this->menu;
    }

    public function setMenu(?Menu $menu): self
    {
        $this->menu = $menu;

        return $this;
    }
}
