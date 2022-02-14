<?php

namespace MorgenBord\DemoWidgetBundle\EventListener;

use App\Entity\Widget;
use App\Event\RegisterWidgetEvent;
use MorgenBord\DemoWidgetBundle\DemoWidgetBundle;
use MorgenBord\DemoWidgetBundle\DemoWidgetParameters;

class RegisterWidgetListener
{
    private $widgetName = 'Demo Widget';
    private $widgetShortName = 'demo_widget';

    public function onMorningBordRegisterWidget(RegisterWidgetEvent $event)
    {
        $widget = new Widget();
        $widget->setName($this->widgetName);
        $widget->setShortName($this->widgetShortName);
        $widget->setFqcn(DemoWidgetBundle::class);
        $widget->setParameters($this->getWidgetParameters($event));
        
        $event->addWidget($widget);
    }

    private function getWidgetParameters(RegisterWidgetEvent $event)
    {
        return $event->parametersForms->processParameters(DemoWidgetParameters::class, []);
    }
}