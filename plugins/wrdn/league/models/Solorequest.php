<?php namespace Wrdn\league\Models;

use Model;

/**
 * Model
 */
class Solorequest extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wrdn_league_solorequests';
    protected $jsonable = ['decks'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'playerphoto'   => ['System\Models\File'],
        'scard'         => ['System\Models\File'],
    ];

    public $attachMany = [
        'deckphotos'    => ['System\Models\File']
    ];

    public function beforeSave() {

        $this->decks = implode($this->decks);

    }
}
