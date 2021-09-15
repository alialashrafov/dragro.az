<?php


namespace App\Http\Controllers\Api;


use App\App;
use App\Http\Controllers\Controller;
use App\Models\Regions;
use App\User;

class AgroController extends Controller
{
    public function regions(){

        $regions = Regions::getRegions();

        $data = [];
        foreach($regions as $key=>$val){
            $data[] = [
                'id'    => $key,
                'name'  => $val,
                'longitude' => '',
                'latitude'  => ''
            ];
        }

        return response()->json([
            'success' => true,
            'data'    => $data
        ]);
    }

    public function waterSupply(){
        $data = [];

        return response()->json([
            'success' => true,
            'data'    => $data
        ]);
    }

    public function packages(){
        $data = [];

        return response()->json([
            'success' => true,
            'data'    => $data
        ]);
    }
}
