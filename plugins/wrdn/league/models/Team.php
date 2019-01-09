<?php namespace Wrdn\league\Models;

use Model;

/**
 * Model
 */
class Team extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wrdn_league_teams';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'seasons' => ['Wrdn\League\Models\Season',
            'table' => 'wrdn_league_seasons_teams',
            'order' => 'name'
        ],
    ];
}
