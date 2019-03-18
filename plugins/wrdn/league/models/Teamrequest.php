<?php namespace Wrdn\league\Models;

use Model;

/**
 * Model
 */
class Teamrequest extends Model
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

    public $attachOne = [
        'teamlogo' => ['System\Models\File'],
    ];

    public $attachMany = [
        'scards'        => ['System\Models\File'],
        'playerphotos'  => ['System\Models\File'],
    ];
}
