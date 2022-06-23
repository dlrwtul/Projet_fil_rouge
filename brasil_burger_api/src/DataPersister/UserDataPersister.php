<?php

namespace App\DataPersister;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserDataPersister implements DataPersisterInterface {

    private UserPasswordHasherInterface $hasher; 
    private $entityManager;

    public function __construct(UserPasswordHasherInterface $hasher,EntityManagerInterface $entityManager) {
        $this->hasher = $hasher;
        $this->entityManager = $entityManager;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof User;
    }

    public function persist($data, array $context = [])
    {
        // call your persistence layer to save $data
        if($data->getPassword() == $data->getConfirmPassword()) {
            $hashed = $this->hasher->hashPassword($data,$data->getPassword());
            $data->setPassword($hashed);
            $data->setIsEtat(true);
            dd($data);
            $this->entityManager->persist($data);
            $this->entityManager->flush();
            return $data;

        } else {
            dd("error: password");
        }

        return $data;
        
    }

    public function remove($data, array $context = [])
    {
        // call your persistence layer to delete $data
        return $data;
    }
}