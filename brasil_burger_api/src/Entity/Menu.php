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
            'denormalization_context' => [ 'groups' => ['menu:write'] ],
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
    private $catalogue;

    #[ORM\OneToMany(mappedBy: 'menu', targetEntity: Taille::class)]
    #[Groups(["menu:read","menu:write"])]
    private $tailles;

    #[ORM\OneToMany(mappedBy: 'menu', targetEntity: PortionFrites::class)]
    #[Groups(["menu:read","menu:write"])]
    private $portionfrites;

    public function __construct()
    {
        $this->burgers = new ArrayCollection();
        $this->tailles = new ArrayCollection();
        $this->portionfrites = new ArrayCollection();
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

    /**
     * @return Collection<int, Taille>
     */
    public function getTailles(): Collection
    {
        return $this->tailles;
    }

    public function addTaille(Taille $taille): self
    {
        if (!$this->tailles->contains($taille)) {
            $this->tailles[] = $taille;
            $taille->setMenu($this);
        }

        return $this;
    }

    public function removeTaille(Taille $taille): self
    {
        if ($this->tailles->removeElement($taille)) {
            // set the owning side to null (unless already changed)
            if ($taille->getMenu() === $this) {
                $taille->setMenu(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PortionFrites>
     */
    public function getPortionfrites(): Collection
    {
        return $this->portionfrites;
    }

    public function addPortionfrite(PortionFrites $portionfrite): self
    {
        if (!$this->portionfrites->contains($portionfrite)) {
            $this->portionfrites[] = $portionfrite;
            $portionfrite->setMenu($this);
        }

        return $this;
    }

    public function removePortionfrite(PortionFrites $portionfrite): self
    {
        if ($this->portionfrites->removeElement($portionfrite)) {
            // set the owning side to null (unless already changed)
            if ($portionfrite->getMenu() === $this) {
                $portionfrite->setMenu(null);
            }
        }

        return $this;
    }
}
