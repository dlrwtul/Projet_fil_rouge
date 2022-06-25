<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ClientRepository;
use App\Controller\RegistrationsController;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
#[ApiResource(
    denormalizationContext: ['groups' => ['user:write','client:write',"user:telephone"]],
    normalizationContext: ['groups' => ['user:read','client:read','user:telephone']],
    collectionOperations:[
        'get',
        'registration' => [
            'method' => 'POST',
            'path' => 'clients/register',
            'controller' => RegistrationsController::class,
        ]
    ],
    itemOperations:[
        'get',
        'put' => [
            'denormalization_context' => ['groups' => ["user:update","client:write","user:telephone"]]
        ]
    ]
)]

class Client extends User
{

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message:"adresse is required")]
    #[Groups(["client:write","client:read"])]
    private $adresse;

    public function __construct() {
        $this->roles = array("ROLE_CLIENT");
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }
}
