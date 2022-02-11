<?php

namespace MorgenBord\DemoWidgetBundle\EventListener;

use App\Entity\Widget;
use App\Event\RegisterWidgetEvent;
use App\Service\WidgetParametersService;
use MorgenBord\DemoWidgetBundle\DemoWidgetBundle;
use MorgenBord\DemoWidgetBundle\DemoWidgetConfiguration;
use Symfony\Component\Config\Definition\Processor;

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
        $widget->setParameters($this->getWidgetConfiguration($event));
        
        $event->addWidget($widget);
    }

    private function getWidgetConfiguration(RegisterWidgetEvent $event)
    {
        return $event->widgetParametersService->processConfiguration(DemoWidgetConfiguration::class, []);
    }
}