<?php

namespace App\DataProvider;

use App\Entity\Catalogue;
use App\Repository\BurgerRepository;
use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use App\Repository\CatalogueRepository;
use App\Repository\MenuRepository;

final class CatalogueDataProvider implements ItemDataProviderInterface, RestrictedDataProviderInterface
{
    private $catalogueRepository;
    private $burgerRepository;
    private $menuRepository;

    public function __construct(BurgerRepository $burgerRepository,MenuRepository $menuRepository,CatalogueRepository $catalogueRepository) {
        $this->burgerRepository = $burgerRepository;
        $this->menuRepository = $menuRepository;
        $this->catalogueRepository = $catalogueRepository;
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return Catalogue::class === $resourceClass;
    }

    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = []): ?Catalogue
    {
        // Retrieve the blog post item from somewhere then return it or null if not found
        $catalogue = $this->catalogueRepository->findOneBy(array('id' => $id));
        foreach ($this->burgerRepository->findBy(array('isEtat' => true)) as $burger) {
            $catalogue->addBurger($burger);
        }
        
        foreach ($this->menuRepository->findBy(array('isEtat' => true)) as $menu) {
            $catalogue->addMenu($menu);
        }
        return $catalogue;
    }
}