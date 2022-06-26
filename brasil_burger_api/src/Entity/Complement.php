<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ComplementRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ComplementRepository::class)]
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

class Complement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\OneToMany(mappedBy: 'complement', targetEntity: PortionFrites::class)]
    #[Groups("product:write")]
    private $portionFrites;

    #[ORM\OneToMany(mappedBy: 'complement', targetEntity: Boisson::class)]
    #[Groups("product:write")]
    private $boissons;

    public function __construct()
    {
        $this->tailles = new ArrayCollection();
        $this->portionFrites = new ArrayCollection();
        $this->boissons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, PortionFrites>
     */
    public function getPortionFrites(): Collection
    {
        return $this->portionFrites;
    }

    public function addPortionFrite(PortionFrites $portionFrite): self
    {
        if (!$this->portionFrites->contains($portionFrite)) {
            $this->portionFrites[] = $portionFrite;
            $portionFrite->setComplement($this);
        }

        return $this;
    }

    public function removePortionFrite(PortionFrites $portionFrite): self
    {
        if ($this->portionFrites->removeElement($portionFrite)) {
            // set the owning side to null (unless already changed)
            if ($portionFrite->getComplement() === $this) {
                $portionFrite->setComplement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Boisson>
     */
    public function getBoissons(): Collection
    {
        return $this->boissons;
    }

    public function addBoisson(Boisson $boisson): self
    {
        if (!$this->boissons->contains($boisson)) {
            $this->boissons[] = $boisson;
            $boisson->setComplement($this);
        }

        return $this;
    }

    public function removeBoisson(Boisson $boisson): self
    {
        if ($this->boissons->removeElement($boisson)) {
            // set the owning side to null (unless already changed)
            if ($boisson->getComplement() === $this) {
                $boisson->setComplement(null);
            }
        }

        return $this;
    }
}
