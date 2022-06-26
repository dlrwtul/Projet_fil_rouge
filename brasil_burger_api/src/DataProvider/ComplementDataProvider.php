<?php

namespace App\DataProvider;

use App\Repository\PortionFritesRepository;
use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Entity\Complement;
use App\Repository\ComplementRepository;
use App\Repository\BoissonRepository;

final class ComplementDataProvider implements ItemDataProviderInterface, RestrictedDataProviderInterface
{
    private $complementRepository;
    private $portionFritesRepository;
    private $boissonRepository;

    public function __construct(PortionFritesRepository $portionFritesRepository, boissonRepository $boissonRepository, ComplementRepository $complementRepository)
    {
        $this->portionFritesRepository = $portionFritesRepository;
        $this->boissonRepository = $boissonRepository;
        $this->complementRepository = $complementRepository;
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Complement::class === $resourceClass;
    }

    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = []): ?Complement
    {
        // Retrieve the blog post item from somewhere then return it or null if not found
        $Complement = $this->complementRepository->findOneBy(array('id' => $id));
        foreach ($this->portionFritesRepository->findBy(array('isEtat' => true)) as $portion) {
            $Complement->addPortionFrite($portion);
        }

        foreach ($this->boissonRepository->findBy(array('isEtat' => true)) as $boisson) {
            $Complement->addBoisson($boisson);
        }
        return $Complement;
    }
}
