<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\CommandeMenuBoissonTailleRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommandeMenuBoissonTailleRepository::class)]
class CommandeMenuBoissonTaille
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'commandeMenuBoissonTailles')]
    private $commande;

    #[ORM\ManyToOne(targetEntity: Menu::class, inversedBy: 'commandeMenuBoissonTailles')]
    private $menu;

    #[ORM\ManyToOne(targetEntity: BoissonTaille::class, inversedBy: 'commandeMenuBoissonTailles')]
    #[Groups(["commande:write","commande:read"])]
    private $boissonTaille;

    #[ORM\Column(type: 'integer')]
    #[Groups(["commande:write","commande:read"])]
    #[Assert\Positive()]
    #[Assert\NotEqualTo(0)]
    private $quantite = 1;

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

    public function getMenu(): ?Menu
    {
        return $this->menu;
    }

    public function setMenu(?Menu $menu): self
    {
        $this->menu = $menu;

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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }
}
