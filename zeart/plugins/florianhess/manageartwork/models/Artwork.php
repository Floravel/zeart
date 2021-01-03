<?php namespace FlorianHess\Manageartwork\Models;

use Model;

/**
 * Model
 */
class Artwork extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'florianhess_manageartwork_artworks';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
