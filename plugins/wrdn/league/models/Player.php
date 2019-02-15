<?php namespace Wrdn\league\Models;

use Model;

/**
 * Model
 */
class Player extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wrdn_league_players';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'teams' => ['Wrdn\League\Models\Team',
            'table' => 'wrdn_league_teams_players',
            'order' => 'name'
        ],
    ];
}
