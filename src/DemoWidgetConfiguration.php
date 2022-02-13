<?php

namespace MorgenBord\DemoWidgetBundle;

use App\Interfaces\ConfigurationFormTypeInterface;
use App\Widget\ConfigurationForms;
use Symfony\Component\Form\Form;

class DemoWidgetConfiguration implements ConfigurationFormTypeInterface
{
    private $configurationForm;

    public function __construct(ConfigurationForms $configurationForm)
    {
        $this->configurationForm = $configurationForm;
    }

    public function createConfigForm(): Form
    {
        $this->configurationForm->createFormBuilder()->getForm();
    }
}