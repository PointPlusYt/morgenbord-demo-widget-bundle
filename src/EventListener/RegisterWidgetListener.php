<?php

namespace MorgenBord\DemoWidgetBundle\EventListener;

use App\Model\Widget;
use App\Event\RegisterWidgetEvent;
use MorgenBord\DemoWidgetBundle\DemoWidgetBundle;

class RegisterWidgetListener
{
    private $widgetName = 'Demo Widget';

    public function onMorningBordRegisterWidget(RegisterWidgetEvent $event)
    {
        $widget = new Widget();
        $widget->setName($this->widgetName);
        $widget->setFqcn(DemoWidgetBundle::class);
        
        $event->addWidget($widget);
    }
}