<?php

namespace MorgenBord\DemoWidgetBundle\EventListener;

use App\Entity\Widget;
use App\Event\RegisterWidgetEvent;
use MorgenBord\DemoWidgetBundle\OtherWidgetParameters;

class RegisterOtherWidgetListener
{
    public const WIDGET_NAME = 'Other Demo Widget';
    public const WIDGET_SHORT_NAME = 'other_widget';
    public const TWIG_FILE = '@DemoWidget/other_widget.html.twig';

    public function onMorningBordRegisterWidget(RegisterWidgetEvent $event)
    {
        $widget = new Widget();
        $widget->setName(self::WIDGET_NAME);
        $widget->setShortName(self::WIDGET_SHORT_NAME);
        $widget->setTwigFile(self::TWIG_FILE);
        $widget->setParameterFormFqcn(OtherWidgetParameters::class);
        
        $event->addWidget($widget);
    }
}