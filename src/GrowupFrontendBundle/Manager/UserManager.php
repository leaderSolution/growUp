<?php
namespace GrowupFrontendBundle\Manager;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\SecurityContext;
use GrowupFrontendBundle\Repository\UserRepository;
class UserManager
{
    const REPOSITORY_NAME = 'GrowupFrontendBundle:User';

    protected $user;
    protected $security;
    protected $repo;

    public function __construct(EntityManager $em, SecurityContext $security)
    {
        $this->em = $em;
        $this->user = $security->getToken()->getUser();
        $this->security = $security;
        $this->repo = $this->getRepository(self::REPOSITORY_NAME);
    }


    
}