<?php

namespace App\Entity;

use App\Entity\Menu;
use App\Entity\Produit;
use App\Entity\Catalogue;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\BurgerRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BurgerRepository::class)]
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

class Burger extends Produit
{
    #[ORM\ManyToMany(targetEntity: Menu::class, mappedBy: 'burgers')]
    private $menus;

    #[ORM\ManyToOne(targetEntity: Catalogue::class, inversedBy: 'burgers')]
    private $catalogue;

    public function __construct()
    {
        $this->menus = new ArrayCollection();
    }

    /**
     * @return Collection<int, Menu>
     */
    public function getMenus(): Collection
    {
        return $this->menus;
    }

    public function addMenu(Menu $menu): self
    {
        if (!$this->menus->contains($menu)) {
            $this->menus[] = $menu;
            $menu->addBurger($this);
        }

        return $this;
    }

    public function removeMenu(Menu $menu): self
    {
        if ($this->menus->removeElement($menu)) {
            $menu->removeBurger($this);
        }

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
