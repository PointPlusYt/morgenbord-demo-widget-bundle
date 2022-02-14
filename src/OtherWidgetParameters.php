<?php

namespace MorgenBord\DemoWidgetBundle;

use App\Interfaces\ParametersFormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class OtherWidgetParameters implements ParametersFormTypeInterface
{
    public function createParametersForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('note', TextareaType::class, [
                'label' => 'Note',
                'required' => false,
            ])
        ;
    }
}