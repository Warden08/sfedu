<?php namespace Wrdn\league\Models;

use Model;

/**
 * Model
 */
class Match extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wrdn_league_matches';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'tournaments' => ['Wrdn\League\Models\Tournament',
            'table' => 'wrdn_league_matches_tournaments',
            'order' => 'name'
        ],
        'team1' => ['Wrdn\League\Models\Team',
            'table' => 'wrdn_league_matches_teams1',
            'order' => 'name'
        ],
        'team2' => ['Wrdn\League\Models\Team',
            'table' => 'wrdn_league_matches_teams2',
            'order' => 'name'
        ],
    ];
}
