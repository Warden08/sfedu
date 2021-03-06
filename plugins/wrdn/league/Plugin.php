<?php namespace Wrdn\league;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Wrdn\League\Components\Form'       => 'Form',
            'Wrdn\League\Components\Formhs'     => 'Formhs',
            'Wrdn\League\Components\Seasons'    => 'Seasons',
            'Wrdn\League\Components\Season'     => 'SeasonEntry',
            'Wrdn\League\Components\Tournament' => 'TournamentEntry',
            'Wrdn\League\Components\Team'       => 'TeamEntry',
            'Wrdn\League\Components\Player'     => 'PlayerEntry',
            'Wrdn\League\Components\Matches'    => 'Matches',
        ];
    }

    public function registerSettings()
    {
    }
}
