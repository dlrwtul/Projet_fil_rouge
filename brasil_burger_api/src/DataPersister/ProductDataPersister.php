<?php

namespace App\DataPersister;

use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\Entity\Produit;

class ProductDataPersister implements DataPersisterInterface {

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Produit;
    }

    public function persist($data, array $context = [])
    {
        // call your persistence layer to save $data
        dd($data);
        $this->entityManager->persist($data);
        $this->entityManager->flush();
        return $data;
        
    }

    public function remove($data, array $context = [])
    {
        $data->setIsEtat(false);
        $this->entityManager->persist($data);
        $this->entityManager->flush();

        return $data;
    }
}