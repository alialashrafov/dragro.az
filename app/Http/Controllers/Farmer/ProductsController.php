<?php
namespace App\Http\Controllers\Farmer;

use App\Models\Crop;
use App\Models\Product;
use App\Models\UserPurchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;

class ProductsController extends \App\Http\Controllers\Controller
{

    public function list(){
        $Products = Product::orderBy('price', 'Desc')->paginate(50);
        $buy = true;
        return view('dragro.farmer.product.list', compact('Products', 'buy'));
    }


    public function myList(){
        $userPurchase = UserPurchase::where('type', 'products')->get()->contains('user_id', auth()->id());
        $Products = [];
        $buy = false;
        if($userPurchase)
        {
        $userPurchase = userPurchase::where('type', 'products')
            ->where('user_id', auth()->id())->pluck('product_id')->toArray();
        $Products = Product::whereIn('id', $userPurchase)->orderBy('id', 'Desc')->paginate(5);
        $buy = true;
        }
        return view('dragro.farmer.product.list', compact('Products', 'buy'));
    }
}
