<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CommandePortionFritesRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CommandePortionFritesRepository::class)]
#[ApiResource()]
class CommandePortionFrites extends CommandeProduit
{
    
    #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'commandePortionFrites')]
    private $commande;

    #[ORM\ManyToOne(targetEntity: PortionFrites::class, inversedBy: 'commandePortionFrites')]
    #[Groups(["commande:write","commande:read","commande:write"])]
    private $portionFrites;

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

    public function getPortionFrites(): ?PortionFrites
    {
        return $this->portionFrites;
    }

    public function setPortionFrites(?PortionFrites $portionFrites): self
    {
        $this->portionFrites = $portionFrites;

        return $this;
    }
}
