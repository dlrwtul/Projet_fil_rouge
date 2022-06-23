<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Controller\BoissonController;
use App\Repository\BoissonRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use phpDocumentor\Reflection\Types\Nullable;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BoissonRepository::class)]
#[ApiResource(
    attributes: ["security" => "is_granted('ROLE_GESTIONNAIRE')"],
    denormalizationContext: ['groups' => ['product:write',"boisson:write"]],
    normalizationContext: ['groups' => ['product:write','product:read','boisson:write']],
    collectionOperations: [
        'post' => [
            'controller' => BoissonController::class,
        ],
    ],
    itemOperations: [
        'get',
        'put',
        'delete'
    ]
)]

class Boisson extends Produit
{
    #[ORM\ManyToMany(targetEntity: Taille::class, mappedBy: 'boissons')]
    #[Assert\NotNull(message:"veuillez choisir des tailles obligatoire")]
    #[Groups("boisson:write")]
    private $tailles;

    public function __construct()
    {
        $this->tailles = new ArrayCollection();
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
            $taille->addBoisson($this);
        }

        return $this;
    }

    public function removeTaille(Taille $taille): self
    {
        if ($this->tailles->removeElement($taille)) {
            $taille->removeBoisson($this);
        }

        return $this;
    }
}
