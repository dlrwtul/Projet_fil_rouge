<?php 

namespace App\Controller;

use App\Entity\Commande;
use App\Repository\MenuRepository;
use App\Repository\BurgerRepository;
use App\Repository\BoissonRepository;
use App\Repository\CommandeRepository;
use App\Repository\PortionFritesRepository;
use App\Repository\TailleRepository;
use App\Repository\ZoneRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizableInterface;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class CommandeAction extends AbstractController {

    public function __invoke
    (
        Request $request,
        DecoderInterface $decoder,
        DenormalizerInterface $denormalizer,
        TokenStorageInterface $tokenStorage,
        CommandeRepository $commandeRepository,
        MenuRepository $menuRepository,
        BurgerRepository $burgerRepository,
        BoissonRepository $boissonRepository,
        PortionFritesRepository $portionFritesRepository,
        TailleRepository $tailleRepository,
        ZoneRepository $zoneRepository
    )
    {
        try {

            $json = $request->getContent();
            
            $dataArray = $decoder->decode($json,'json');

            $data = $denormalizer->denormalize($dataArray,Commande::class);

            $user = $tokenStorage->getToken()->getUser();
            $data->setClient($user);

            $zone = $zoneRepository->findOneBy(array('id' => $dataArray['zone']));

            if (!null == $zone) {
                $data->setZone($zone);
            }else {
                return $this->json(["status" => 400,"message"=>"Veuillez entrer une zone valide"],400);
            }
            
            $produits = $dataArray["produits"];

            $menus = $produits["menus"];

            $burgers = $produits["burgers"];

            $boissons = $produits["boissons"];

            $frites = $produits["frites"];

            $prix = 0;
            
            foreach ($boissons as $boisson) {

                $object = $boissonRepository->findOneByBoissonTaille($boisson['id'],$boisson['taille']);
                $taille = $tailleRepository->findOneBy(array('id' => $boisson["taille"]));
                $prix +=$taille->getPrix();
                if (!null == $object) {
                    $data->addCommandeProduit($object,$boisson["quantite"]);
                }
                
            }

            $this->addProduit($menuRepository,$menus,$data,$prix);
            $this->addProduit($burgerRepository,$burgers,$data,$prix);
            $this->addProduit($portionFritesRepository,$frites,$data,$prix);
            
            $data->setMontant($prix);

            $count = $commandeRepository->getCommandsCount()[0]["count"] + 1;

            $data->setNumero($data->generateNumero($count));

            $commandeRepository->add($data,true);

            return $this->json($data, 201,[],['groups' => ['commande:read']]);

        } catch (NotEncodableValueException $th) {

            return $this->json([

                "status"=> 400,
                "message" => $th->getMessage()

            ]);
        }
    }

    public function addProduit($repo,$produits,&$data,&$prix){
        foreach ($produits as $produit) {
            $object = $repo->findOneBy(array('id' => $produit["id"]));
            if (!null == $object) {
                $prix += $object->getPrix();
                $data->addCommandeProduit($object,$produit["quantite"]);
            }
        }
    }

}