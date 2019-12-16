<?php namespace Nandy\Vuerentacar\Models;

use Model;

/**
 * Model
 */
class Location extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'nandy_vuerentacar_locations';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
