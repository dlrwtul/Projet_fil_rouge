<?php

namespace App\Security\Voter;

use App\Entity\Livraison;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class LivraisonVoter extends Voter
{
    public const DELETE = 'DELETE';
    public const CREATE = 'CREATE';
    public const READ = 'READ';
    public const EDIT = 'EDIT';
    public const ALL = 'ALL';
    private $security = null;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports(string $attribute, $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::READ, self::CREATE, self::DELETE,self::ALL])
            && $subject instanceof Livraison;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        if (!$user instanceof UserInterface) {
            return false;
        }

        switch ($attribute) {
            case self::ALL:
                if ( $this->security->isGranted(Role::GESTIONNAIRE) ) { return true; } 
                break;
        }

        return false;
    }
}
