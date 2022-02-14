<?php

namespace MorgenBord\DemoWidgetBundle;

use App\Interfaces\ParametersFormTypeInterface;
use App\Widget\ParametersForms;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class DemoWidgetParameters implements ParametersFormTypeInterface
{
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