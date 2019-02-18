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

    public $belongsToMany = [
        'tournaments' => ['Wrdn\League\Models\Tournament',
            'table' => 'wrdn_league_seasons_tournaments',
            'order' => 'name'
        ],
    ];

    public static $allowedSortingOptions = [
        'name asc' => 'name (ascending)',
        'name desc' => 'name (descending)',
        'id asc' => 'Created (ascending)',
        'id desc' => 'Created (descending)',
        // 'updated_at asc' => 'Updated (ascending)',
        // 'updated_at desc' => 'Updated (descending)',
        //'published_at asc' => 'Published (ascending)',
        //'published_at desc' => 'Published (descending)',
        // 'random' => 'Random'
    ];

    public function scopeIsPublished($query)
    {
        return $query->where('is_active','!=',0);
    }

    public function scopeListFrontEnd($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page'       => 1,
            'perPage'    => 30,
            'sort'       => 'created_at',
            //'categories' => null,
            //'category'   => null,
            'search'     => '',
            //'published'  => true,
            //'exceptPost' => null,
        ], $options));

        $searchableFields = ['name', 'slug'];


        /*
         * Sorting
         */
        if (!is_array($sort)) {
            $sort = [$sort];
        }

        foreach ($sort as $_sort) {

            if (in_array($_sort, array_keys(self::$allowedSortingOptions))) {
                $parts = explode(' ', $_sort);
                if (count($parts) < 2) {
                    array_push($parts, 'desc');
                }
                list($sortField, $sortDirection) = $parts;
                if ($sortField == 'random') {
                    $sortField = Db::raw('RAND()');
                }
                $query->orderBy($sortField, $sortDirection);
            }
        }

        /*
         * Search
         */
        $search = trim($search);
        if (strlen($search)) {
            $query->searchWhere($search, $searchableFields);
        }


        return $query->paginate($perPage, $page);
    }

    public function setUrl($pageName, $controller)
    {
        $params = [
            'id'   => $this->id,
            'slug' => $this->slug,
        ];


        return $this->url = $controller->pageUrl($pageName, $params);
    }
}
