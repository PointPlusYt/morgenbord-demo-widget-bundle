<?php

namespace MorgenBord\DemoWidgetBundle;

use App\Interfaces\ParametersFormTypeInterface;
use App\Widget\ParametersForms;
use Symfony\Component\Form\FormBuilderInterface;

class DemoWidgetParameters implements ParametersFormTypeInterface
{
    public function createParametersForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('text')
            ->add('number')
        ;
    }
}