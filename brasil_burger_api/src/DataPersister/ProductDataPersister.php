<?php

namespace App\DataPersister;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class ProductDataPersister implements DataPersisterInterface {

    private $entityManager;
    private $tokenStorage;

    public function __construct(EntityManagerInterface $entityManager,TokenStorageInterface $tokenStorage) {
        $this->entityManager = $entityManager;
        $this->tokenStorage = $tokenStorage;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Produit;
    }

    public function persist($data, array $context = [])
    {
        // call your persistence layer to save $data
        $user = $this->tokenStorage->getToken()->getUser();
        $data->setUser($user);
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