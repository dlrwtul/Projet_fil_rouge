<?php 

namespace App\Controller;

use App\Entity\Taille;
use App\Entity\PortionFrites;
use App\Repository\MenuRepository;
use App\Repository\BurgerRepository;
use App\Repository\TailleRepository;
use App\Repository\PortionFritesRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class MenuController extends AbstractController {

    public function __invoke
    (
        Request $request,
        MenuRepository $menuRepository,
        DecoderInterface $decoder,
        DenormalizerInterface $denormalizer,
        BurgerRepository $burgerRepository,
        TailleRepository $tailleRepository,
        PortionFritesRepository $portionFritesRepository,
        TokenStorageInterface $tokenStorage,
        int $id = null
        )
    {
        
    }

}