<?php

namespace App\Models;


class Regions
{
    protected static $regions = [
        'Abşeron',
        'Quba-Xaçmaz',
        'Dağlıq Şirvan',
        'Şəki-Zaqatala',
        'Aran',
        'Gəncə-Qazax',
        'Yuxarı Qarabağ',
        'Kəlbəcər-Laçın',
        'Lənkəran',
        'Naxçıvan'
    ];


    public static function getRegions(){
        return self::$regions;
    }

    public static function getRegion($index){
        return self::$regions[$index];
    }
}
