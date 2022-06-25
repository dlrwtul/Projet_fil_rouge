<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\LivreurRepository;
use App\Controller\RegistrationsController;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: LivreurRepository::class)]
#[ApiResource(
    denormalizationContext: ['groups' => ['user:write','livreur:write',"user:telephone"]],
    normalizationContext: ['groups' => ['user:read','livreur:read']],
    collectionOperations:[
        'get',
        'registration' => [
            'method' => 'POST',
            'path' => 'livreurs/register',
            'controller' => RegistrationsController::class,
        ]
    ],
    itemOperations:[
        'get',
        'put' => [
            'denormalization_context' => ['groups' => ["user:update","livreur:write","user:telephone"]]
        ]
    ]
)]

class Livreur extends User
{
    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message:"matricule moto is required")]
    #[Groups(["livreur:write","livreur:read"])]
    private $matriculeMoto;

    public function __construct() {
        $this->roles = array("ROLE_LIVREUR");
    }

    public function getMatriculeMoto(): ?string
    {
        return $this->matriculeMoto;
    }

    public function setMatriculeMoto(string $matriculeMoto): self
    {
        $this->matriculeMoto = $matriculeMoto;

        return $this;
    }
}
