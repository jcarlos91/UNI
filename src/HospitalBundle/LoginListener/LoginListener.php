<?php
namespace Hospital\HospitalDishBundle\Listener;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;


class LoginListener {

    /** @var \Symfony\Component\DependencyInjection\ContainerAwareInterface */
    private $container;

    /** @var \Doctrine\ORM\EntityManager */
    private $em;

    /**
     * Constructor
     *
     * @param SecurityContext $securityContext
     * @param Doctrine        $doctrine
     */
    public function __construct($container, EntityManager $em){
        $this->container = $container;
        $this->em        = $em;
    }

    /**
     * @inheritdoc
     */
    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event){
        // do some other magic here
        $user = $event->getAuthenticationToken()->getUser();

        $this->container->get('session')->set('sid', $user->getId());
        $this->container->get('session')->set('sName', $user->getFirstName().' '.$user->getLastName());

    }
}
?>