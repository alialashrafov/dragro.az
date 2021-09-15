<?php


namespace App\Models;


class IrrigationTypes
{
    protected static $types = [
        'Damlama',
        'Sprinkler',
        'Pivot',
        'Selləmə'
    ];

    public static function getTypes(){
        return self::$types;
    }
}
