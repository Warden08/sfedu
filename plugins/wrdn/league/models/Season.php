<?php namespace Wrdn\league\Models;

use Model;

/**
 * Model
 */
class Season extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wrdn_league_seasons';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
