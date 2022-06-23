<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Mime\Email;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Exception\NotEncodableValueException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class RegistrationsController extends AbstractController {

    static $EmailFrom = "6fa8f10b12-eda015@inbox.mailtrap.io";

    public function __invoke
    (
        Request $request,
        SerializerInterface $serializer,
        UserPasswordHasherInterface $hasher,
        ValidatorInterface $validator,
        UserRepository $userRepository,
        MailerInterface $mailer,
        TokenStorageInterface $tokenStorage,
        JWTTokenManagerInterface $JWTManager
    ) : Response
    {

        $data = $request->getContent();

        try {

            $user = $serializer->deserialize($data,User::class,'json');
            $errors = $validator->validate($user);

            if(count($errors) == 0) {

                $check = $userRepository->findOneBy(array('login' => $user->getLogin()));

                if (null == $check) {

                    if($user->getPassword() == $user->getConfirmPassword()) {

                        $hashed = $hasher->hashPassword($user,$user->getPassword());
                        $user->setPassword($hashed);
                        $user->setIsEtat(false);

                        $token = $JWTManager->create($user);

                        $userRepository->add($user,true);

                        $message = (new Email())
                                    ->from(self::$EmailFrom)
                                    ->to($user->getLogin())
                                    ->subject('Email address confirmation')
                                    ->text(sprintf('Confirm your mail adresse ,and enjoy.'."http://127.0.0.1:8000/api/verify_mail/{$token}"));
                        $mailer->send($message);

    
                        return $this->json("veuiller Confirmer votre email", 200);
    
                    } else {

                        return $this->json(["status" => 400,"message"=>"Invalid password confirm"],400);

                    }
                } else {

                    return $this->json(["status" => 400,"message"=>"Email already in db"],400);

                }
                
            } else {
                
                $this->json($errors,400);
            }
            
        } catch (NotEncodableValueException $th) {

            return $this->json([

                "status"=> 400,
                "message" => $th->getMessage()

            ]);
        }
    }

    #[Route(path:'api/verify_mail/{token}',name:'app_verify_mail', methods:['GET'])]
    public function verifyUserEmail(Request $request,JWTTokenManagerInterface $JWTManager,UserRepository $userRepository,String $token): Response
    {
        $tokenParts = explode(".", $token);  
        //$tokenHeader = base64_decode($tokenParts[0]);
        $tokenPayload = base64_decode($tokenParts[1]);
        //$jwtHeader = json_decode($tokenHeader);
        $jwtPayload = json_decode($tokenPayload);

        $user = $userRepository->findOneBy(array('login' => $jwtPayload->username));

        if ($user !=null) {

            $user->setIsEtat(true);

            return $this->json("Suscribtion succes",200);

        } else {

            return $this->json("Your token is invalid",400);
        }
    }
}