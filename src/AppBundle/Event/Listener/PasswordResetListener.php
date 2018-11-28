<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 18.11.28
 * Time: 11.49
 */

namespace AppBundle\Event\Listener;


use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PasswordResetListener implements EventSubscriberInterface
{

    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        return [
          FOSUserEvents::RESETTING_RESET_SUCCESS =>'onPasswordResettingSuccess',
        ];
    }

    public function onPasswordResettingSuccess(FormEvent $event)
    {
        $url = $this->router->generate('fos_user_registration_register');
        $event->setResponse(new RedirectResponse($url));
    }
}