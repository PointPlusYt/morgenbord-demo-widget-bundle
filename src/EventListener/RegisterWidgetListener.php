<?php

namespace MorgenBord\DemoWidgetBundle\EventListener;

use App\Event\RegisterWidgetEvent;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\HttpKernel\Event\ExceptionEvent;
// use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class RegisterWidgetListener
{
    public function onRegisterWidget(RegisterWidgetEvent $event)
    {
        dd($event);
    }
}