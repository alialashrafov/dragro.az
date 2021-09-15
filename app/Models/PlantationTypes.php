<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class PlantationTypes extends Model
{

    protected $table = 'type_of_plants';

    public $timestamps = false;

    protected static $types = [
        'Ənənəvi',
        'İntensiv',
        'Super İntensiv',
        'Orqanik'
    ];


    public static function getTypes()
    {
        return self::$types;
    }
}
