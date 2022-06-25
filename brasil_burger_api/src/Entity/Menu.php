<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Controller\MenuController;
use App\Repository\MenuRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MenuRepository::class)]
#[ApiResource(
    attributes: ["security" => "is_granted('ROLE_GESTIONNAIRE')"],
    denormalizationContext: ['groups' => ['product:write']],
    normalizationContext: ['groups' => ['product:write','product:read','menu:read']],
    collectionOperations: [
        'post' => [
            'controller' => MenuController::class,
        ],
    ],
    itemOperations: [
        'get',
        'put' => [
            'denormalization_context' => [ 'groups' => ['product:write','menu:write'] ],
        ],
        'delete'
    ]
)]

class Menu extends Produit
{
    #[ORM\ManyToMany(targetEntity: Burger::class, inversedBy: 'menus')]
    #[Groups(["menu:read","menu:write"])]
    private $burgers;

    #[ORM\ManyToOne(targetEntity: Catalogue::class, inversedBy: 'menus')]
    #[Groups(["menu:read","menu:write"])]
    private $catalogue;

    public function __construct()
    {
        $this->burgers = new ArrayCollection();
    }

    /**
     * @return Collection<int, Burger>
     */
    public function getBurgers(): Collection
    {
        return $this->burgers;
    }

    public function addBurger(Burger $burger): self
    {
        if (!$this->burgers->contains($burger)) {
            $this->burgers[] = $burger;
        }

        return $this;
    }

    public function removeBurger(Burger $burger): self
    {
        $this->burgers->removeElement($burger);

        return $this;
    }

    public function getCatalogue(): ?Catalogue
    {
        return $this->catalogue;
    }

    public function setCatalogue(?Catalogue $catalogue): self
    {
        $this->catalogue = $catalogue;

        return $this;
    }
}
