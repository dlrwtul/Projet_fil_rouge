<?php

namespace App\EventSubscriber;

use App\Entity\User;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use ApiPlatform\Core\EventListener\EventPriorities;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EmailSubscriber implements EventSubscriberInterface
{
    private $mailer;
    static $EmailFrom = "6fa8f10b12-eda015@inbox.mailtrap.io";

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => ['sendMail', EventPriorities::POST_WRITE],
        ];
    }

    public function sendMail(ViewEvent $event): void
    {
        $user = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        if (!$user instanceof User || Request::METHOD_POST !== $method) {
            return;
        }

        $token = "";
        $message = (new Email())
            ->from(self::$EmailFrom)
            ->to($user->getLogin())
            ->subject('Brazil Burger ')
            ->text(sprintf('Buy burgers ,and enjoy.',$token));
        $this->mailer->send($message);

        //dd($message);

    }
}
