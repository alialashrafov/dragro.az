<?php


namespace App\Models;


class SoilStructures
{
    public static $structures = [
        'Qum',
        'Qumsal',
        'Gilli',
        'Gillicəli',
        'Lilli'
    ];


    public static function getStructures()
    {
        return self::$structures;
    }
}
