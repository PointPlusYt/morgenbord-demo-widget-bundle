<?php

namespace MorgenBord\DemoWidgetBundle\EventListener;

use App\Entity\Widget;
use App\Event\RegisterWidgetEvent;
use MorgenBord\DemoWidgetBundle\DemoWidgetBundle;
use MorgenBord\DemoWidgetBundle\DemoWidgetParameters;

class RegisterDemoWidgetListener
{
    public const WIDGET_NAME = 'Demo Widget';
    public const WIDGET_SHORT_NAME = 'demo_widget';
    public const TWIG_FILE = '@DemoWidget/widget.html.twig';

    public function onMorningBordRegisterWidget(RegisterWidgetEvent $event)
    {
        $widget = new Widget();
        $widget->setName(self::WIDGET_NAME);
        $widget->setShortName(self::WIDGET_SHORT_NAME);
        $widget->setTwigFile(self::TWIG_FILE);
        $widget->setParameterFormFqcn(DemoWidgetBundle::class);
        
        $event->addWidget($widget);
    }
}