<?php

namespace MorgenBord\DemoWidgetBundle;

use App\Entity\Widget;
use App\Event\RegisterWidgetEvent;
use App\Interfaces\ParametersFormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class DemoWidgetParameters implements ParametersFormTypeInterface
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
    
    public function createParametersForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'required' => false,
            ])
            ->add('number', IntegerType::class, [
                'label' => 'Nombre',
                'required' => false,
            ])
            ->add('longtext', TextareaType::class, [
                'label' => 'Long texte',
                'required' => false,
            ])
        ;
    }
}