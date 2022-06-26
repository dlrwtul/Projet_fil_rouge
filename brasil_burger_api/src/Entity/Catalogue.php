<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CatalogueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CatalogueRepository::class)]
#[ApiResource(
    attributes: ["security" => "is_granted('ROLE_GESTIONNAIRE')"],
    itemOperations: [
        'get' => [
            'normalization_context' => ['groups' => ["product:write"]]
        ]
    ],
    collectionOperations: [
        'post' => [
            'denormalization_context' => ['groups' => ["nothing"]]
        ]
    ]
)]
class Catalogue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\OneToMany(mappedBy: 'catalogue', targetEntity: Burger::class)]
    #[Groups("product:write")]
    private $burgers;

    #[ORM\OneToMany(mappedBy: 'catalogue', targetEntity: Menu::class)]
    #[Groups("product:write")]
    private $menus;

    public function __construct()
    {
        $this->burgers = new ArrayCollection();
        $this->menus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $burger->setCatalogue($this);
        }

        return $this;
    }

    public function setBurgers(ArrayCollection $burgers): self
    {
        $this->burgers = $burgers;
        return $this;
    }

    public function removeBurger(Burger $burger): self
    {
        if ($this->burgers->removeElement($burger)) {
            // set the owning side to null (unless already changed)
            if ($burger->getCatalogue() === $this) {
                $burger->setCatalogue(null);
            }
        }

        return $this;
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
            $menu->setCatalogue($this);
        }

        return $this;
    }

    public function setMenus(ArrayCollection $menus): self
    {
        $this->menus = $menus;
        return $this;
    }

    public function removeMenu(Menu $menu): self
    {
        if ($this->menus->removeElement($menu)) {
            // set the owning side to null (unless already changed)
            if ($menu->getCatalogue() === $this) {
                $menu->setCatalogue(null);
            }
        }

        return $this;
    }
}
