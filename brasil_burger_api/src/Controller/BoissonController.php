<?php 

namespace App\Controller;

use App\Entity\Boisson;
use App\Repository\TailleRepository;
use App\Repository\BoissonRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;

class BoissonController extends AbstractController
{

    public function __invoke
    (
        Request $request,
        BoissonRepository $boissonRepository,
        DecoderInterface $decoder,
        DenormalizerInterface $denormalizer,
        TailleRepository $tailleRepository,
        TokenStorageInterface $tokenStorage,
        int $id = null
        )
    {
        try {

            $json = $request->getContent();
            
            $boissonArray = $decoder->decode($json,'json');


            $boisson = $denormalizer->denormalize($boissonArray,Boisson::class);

            /* if ($request->getMethod() == 'PUT') {
                
                $check = $boissonRepository->findOneBy(array('id' => $id));
                if ($boisson->getNom() != null) {
                    $check->setNom($boisson->getNom());
                }

                if ($boisson->getImage() != null) {
                    $check->setImage($boisson->getImage());
                }

                $tailles = $check->getTailles();

                foreach ( $tailles as $value) {
                    $check->removeTaille($value);
                }

                $boisson = $check;
            } */

            if ($request->getMethod() == 'POST') {

                $check = $boissonRepository->findOneBy(array('nom' => $boissonArray['nom']));

                if ($check != null) {

                    return $this->json(["status" => 400,"message"=>"Boisson already in db"],400);

                }
            }

            foreach ($boissonArray["tailles"] as $idTaille) {
                $taille = $tailleRepository->findOneBy(array('id' => $idTaille));
                if ($taille != null) {
                    $boisson->addTaille($taille);
                } else {
                    return $this->json(["status" => 400,"message"=>"Boisson invalid"],400);
                }
            }

            $user = $tokenStorage->getToken()->getUser();
            $boisson->setUser($user);
            $boissonRepository->add($boisson,true);

            return $this->json($boisson, 201);

        } catch (NotEncodableValueException $th) {

            return $this->json([

                "status"=> 400,
                "message" => $th->getMessage()

            ]);
        }
        

    }

}