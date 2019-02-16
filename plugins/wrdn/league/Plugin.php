<?php namespace Wrdn\league;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Wrdn\League\Components\Form'  => 'Form',
        ];
    }

    public function registerSettings()
    {
    }
}
