<?php namespace Wrdn\league\Models;

use Model;

/**
 * Model
 */
class Request extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wrdn_league_requests';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
