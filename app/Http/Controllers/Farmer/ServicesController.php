<?php
namespace App\Http\Controllers\Farmer;

use App\Models\Product;
use App\Models\Service;
use App\Models\UserPurchase;

class ServicesController extends \App\Http\Controllers\Controller
{

    public function list(){
        $Services = Service::orderBy('price', 'ASC')->paginate(50);
        $buy = true;
        return view('dragro.farmer.service.list', compact('Services', 'buy'));
    }

    public function myList(){
        $userPurchase = UserPurchase::where('type', 'services')->get()->contains('user_id', auth()->id());
        $Services = [];
        $buy = false;
        if($userPurchase)
        {
            $userPurchase = userPurchase::where('type', 'services')
                ->where('user_id', auth()->id())->pluck('service_id')->toArray();
            $Services = Service::whereIn('id', $userPurchase)->orderBy('id', 'Desc')->paginate(5);
            $buy = true;
        }
        return view('dragro.farmer.service.list', compact('Services', 'buy'));
    }
}
