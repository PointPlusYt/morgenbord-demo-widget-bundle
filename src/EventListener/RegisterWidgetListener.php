<?php

namespace MorgenBord\DemoWidgetBundle\EventListener;

use App\Model\Widget;
use App\Event\RegisterWidgetEvent;
use MorgenBord\DemoWidgetBundle\DemoWidgetBundle;

class RegisterWidgetListener
{
    public function onMorningBordRegisterWidget(RegisterWidgetEvent $event)
    {
        $widget = new Widget();
        $widget->setName('Demo Widget');
        $widget->setFqcn(DemoWidgetBundle::class);
    }
}