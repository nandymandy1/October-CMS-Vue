<?php namespace Nandy\Vuerentacar\Models;

use Model;

/**
 * Model
 */
class Vehicle extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /* Relations */

    // Vehicle-Location
    public $belongsToMany = [
        'locations' => [
            'Nandy\Vuerentacar\Models\Location',
            'table' => 'nandy_vuerentacar_vehi_loc',
            'order' => 'title'
        ],
        'dates' => [
            'Nandy\Vuerentacar\Models\Date',
            'table' => 'nandy_vuerentacar_vehicles_dates',
            'order' => 'pickup'
        ]
    ];

    // Vehicle-Image
    public $attachOne = [
        'image' => 'System\Models\File'
    ];
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nandy_vuerentacar_vehicles';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
