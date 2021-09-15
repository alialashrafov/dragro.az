<?php
namespace App\Http\Controllers\DrAgro;

use App\Models\Crop;
use App\Models\Crops;
use App\Models\Farmer;
use App\Models\IrrigationTypes;
use App\Models\Packages;
use App\Models\PlantationTypes;
use App\Models\Regions;
use App\Models\SoilStructures;
use App\Models\UserPurchase;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use View;


class FarmersController extends \App\Http\Controllers\Controller
{

    public $crops;
    public $plantationTypes;
    public $irrigation_type;
    public $canAddNewCrop;
    public $farmerData;


    public function __construct()

    {
        parent::__construct();
        $this->plantationTypes = PlantationTypes::all();
        $this->irrigation_type = IrrigationTypes::getTypes();
        View::share('irrigation_type', $this->irrigation_type);
        View::share('structureOfSoil', SoilStructures::getStructures());
        View::share('types', $this->plantationTypes);


    }


    public function index(){
        $Farmers = Farmer::select('u.*')->leftJoin('users as u', 'u.id', '=', 'farmers.user_id')->paginate(20);

        return view('dragro.dragro.farmers.list', compact('Farmers'));
    }

    public function search(Request $request)
    {
        if($request->has('name'))
        {
            $Farmers = Farmer::select('u.*')->leftJoin('users as u', 'u.id', '=', 'farmers.user_id')
                ->where('name', 'LIKE', "%$request->name%")
                ->where('farmers.package', $request->package)
                ->paginate(20);
        }else{
            $Farmers = Farmer::select('u.*')->leftJoin('users as u', 'u.id', '=', 'farmers.user_id')
                ->where('farmers.package', $request->package)
                ->paginate(20);
        }
        return view('dragro.dragro.farmers.search', compact('Farmers'));

    }

    

    public function delete($id){
        $Associations = Farmer::where('user_id',$id)->first();
        $User = User::find($id);

        if(Auth::user()->type == 'Employee'){
            $Associations->delete();
            $User->delete();
        }
        return redirect()->back();
    }

    public function show(Request $request, $id){
        $page = 'crops';
        $data = [];
        $Farmer = Farmer::where('user_id', $id)->first();
        $regions = Regions::getRegions();

        if($request->has('page')){
            switch($request->page){
                case 'crops' :
//                    $data = Crop::where('user_id', $Farmer->user_id)->get();
                    $data = Crop::select('crops.*', 'p.name as crop_name', 'p.plan_doc')
                        ->leftJoin('plants as p', 'p.id', '=', 'crops.crop')
                        ->where('user_id', $Farmer->user_id)->get();
                    $page = 'crops';
                    break;
                case 'products' :
                    $data = UserPurchase::select('p.title', 'p.price', 'p.image', 'user_purchase.created_at')
                        ->leftJoin('products as p', 'p.id', '=', 'user_purchase.type_id')
                        ->where('user_purchase.type', 'products')->get();

                    $page = 'products';
                    break;
                default :
                    $data = UserPurchase::select('p.title', 'p.price', 'p.image', 'user_purchase.created_at')
                        ->leftJoin('services as p', 'p.id', '=', 'user_purchase.type_id')
                        ->where('user_purchase.type', 'services')->get();
                    $page = 'services';
                    break;
            }
        }
        return view('dragro.dragro.farmers.show', compact('page', 'Farmer', 'data', 'regions'));
    }

}
