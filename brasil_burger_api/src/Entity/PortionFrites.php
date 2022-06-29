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
    #[ORM\ManyToOne(targetEntity: Menu::class, inversedBy: 'portionfrites')]
    private $menu;

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
