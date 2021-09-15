<?php

namespace App\Models;


class Packages
{
    protected static $packages = [
        [
            'id' => 1,
            'cropLimit' => 2,
            'messageLimit'  => 0
        ],
        [
            'id'    => 2,
            'cropLimit' => 3,
            'messageLimit'  => 3
        ],
        [
            'id'    => 3,
            'cropLimit' => 5,
            'messageLimit'  => 6
        ],
        [
            'id'    => 4,
            'cropLimit' => 7,
            'messageLimit'  => 12
        ]
    ];


    public static function all(){
        return self::$packages;
    }

    public static function getOne($id){
        $index = $id - 1;
        return self::$packages[$index];
    }
}
