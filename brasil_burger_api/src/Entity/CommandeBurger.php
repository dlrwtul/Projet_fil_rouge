<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CommandeBurgerRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CommandeBurgerRepository::class)]
#[ApiResource()]
class CommandeBurger extends CommandeProduit
{

    #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'commandeBurgers')]
    private $commande;

    #[ORM\ManyToOne(targetEntity: Burger::class, inversedBy: 'commandeBurgers')]
    #[Groups(["commande:write","commande:read","commande:write"])]
    private $burger;

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

    public function getBurger(): ?Burger
    {
        return $this->burger;
    }

    public function setBurger(?Burger $burger): self
    {
        $this->burger = $burger;

        return $this;
    }
}
