<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PortionFritesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PortionFritesRepository::class)]
#[ApiResource(
    attributes: ["security" => "is_granted('ROLE_GESTIONNAIRE')"],
    denormalizationContext: ['groups' => ['product:write']],
    normalizationContext: ['groups' => ['product:write','product:read']],
    collectionOperations: [
        'post',
    ],
    itemOperations: [
        'get',
        'put',
        'delete'
    ]
)]

class PortionFrites extends Produit
{
    #[ORM\ManyToOne(targetEntity: Complement::class, inversedBy: 'portionFrites')]
    private $complement;

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