<?php 

namespace App\Controller;

use App\Entity\Menu;
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
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
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
        )
    {
        try {

            $json = $request->getContent();
            
            $dataArray = $decoder->decode($json,'json');

            $data = $denormalizer->denormalize($dataArray,Menu::class);

            if ($request->getMethod() == 'POST') {

                $check = $menuRepository->findOneBy(array('nom' => $dataArray['nom']));

                if ($check != null) {

                    return $this->json(["status" => 400,"message"=>"Menu already in db"],400);

                }
            }
            

            foreach ($dataArray["burgers"] as $idBurger) {
                $burger = $burgerRepository->findOneBy(array('id' => $idBurger));
                if ($burger != null) {
                    $data->addBurger($burger);
                } else {
                    return $this->json(["status" => 400,"message"=>"Burger invalid"],400);
                }
            }

            foreach ($dataArray["tailles"] as $idTaille) {
                $taille = $tailleRepository->findOneBy(array('id' => $idTaille));
                if ($taille != null) {
                    $data->addTaille($taille);
                } else {
                    return $this->json(["status" => 400,"message"=>"taille invalid"],400);
                }
            }

            foreach ($dataArray["portionFrites"] as $idportion) {
                $portion = $portionFritesRepository->findOneBy(array('id' => $idportion));
                if ($portion != null) {
                    $data->addPortionFrite($portion);
                } else {
                    return $this->json(["status" => 400,"message"=>"Portion de frites invalid"],400);
                }
            }


            $user = $tokenStorage->getToken()->getUser();
            $data->setUser($user);

            $menuRepository->add($data,true);

            return $this->json($data, 201);

        } catch (NotEncodableValueException $th) {

            return $this->json([

                "status"=> 400,
                "message" => $th->getMessage()

            ]);
        }
    }

}