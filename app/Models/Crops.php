<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crops extends Model
{
    protected static $crops = [
        'Alça',
        'Alma',
        'Armud',
        'Badam',
        'Ərik',
        'Fındıq',
        'Gilas',
        'Nar',
        'Nektarin',
        'Qoz',
        'Şaftalı',
        'Üzüm',
        'Xurma',
        'Zeytun',
        'Günəbaxan',
        'Pambıq',
        'Qarğıdalı',
        'Şəkər Çuğunduru',
        'Soya',
        'Taxıl (Arpa-Buğda)',
        'Yonca',
        'Badımcan',
        'Bibər',
        'Kartof (dəmyə)',
        'Kələm',
        'Kök',
        'Noxud',
        'Pomidor',
        'Qarpız',
        'Sarımsaq',
        'Soğan',
        'Xiyar',
        'Yemiş',
    ];

    public static function getCrops(){
        return self::$crops;
    }
}
