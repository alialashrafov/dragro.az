<?php

namespace App\Http\Controllers\Farmer;

use App\App;
use App\Models\Crop;
use App\Models\Crops;
use App\Models\Farmer;
use App\Models\IrrigationTypes;
use App\Models\Notification;
use App\Models\userNotification;
use App\Models\Packages;
use App\Models\Plant;
use App\Models\PlantationTypes;
use App\Models\Regions;
use App\Models\Expense;
use App\Models\SoilStructures;
use App\User;
use Cassandra\Varint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use View;


class CropsController extends \App\Http\Controllers\Controller
{

    public $crops;
    public $plantationTypes;
    public $canAddNewCrop;
    public $farmerData;


    public function __construct()

    {
        parent::__construct();
        $this->crops = Crop::where('user_id', auth()->id())->get();
        $this->plantationTypes = PlantationTypes::all();
        $this->farmerData = Farmer::where('user_id', auth()->id())->first();
        $farmerPackage = Packages::getOne($this->farmerData->package);
        $this->canAddNewCrop = $farmerPackage['cropLimit'] > count($this->crops);
        View::share('canAddNewCrop', $this->canAddNewCrop);

        View::share('regions', Regions::getRegions());

        View::share('types', $this->plantationTypes);
        View::share('typesOfIrrigations', IrrigationTypes::getTypes());
        View::share('structureOfSoil', SoilStructures::getStructures());
        View::share('plantationTypes', PlantationTypes::getTypes());


    }

    public function index(){
        $plantations = Crop::select('crops.*', 'p.name as crop_name', 'p.plan_doc', 'p.type_id')
            ->leftJoin('plants as p', 'p.id', '=', 'crops.crop')
            ->where('user_id', auth()->id())->get();

        return view('dragro.farmer.crops.list', compact('plantations'));
    }

    public function create(){

        $cropArr = [];
        foreach ($this->crops as $crop){
            $cropArr[$crop->type_id][] = $crop;
        }
        return view('dragro.farmer.crops.create', compact('cropArr'));
    }

    public function store(Request $request){
        if(!$this->canAddNewCrop) return redirect()->back();
        $file = Input::file('soil_analyses');

        $rules = array(
            'soil_analyses' => 'required|max:100000'
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back();
        }
        $folder = public_path('uploads/soilanalyses');
        $filename = $file->getClientOriginalName();

        $date_append = date("Y-m-d-His-");
        $filename = $date_append.$filename;
        $upload_success = Input::file('soil_analyses')->move($folder, $filename);
        if($upload_success) {
            $Crop = new Crop();
            $Crop->user_id = auth()->id();
            $Crop->region = $request->region;
            $Crop->city = $request->city;
            $Crop->address = $request->address;
            $Crop->crop = $request->crop;
            $Crop->plantation_type = $request->plantation_type;
            $Crop->irrigation_type = $request->irrigation_type;
            $Crop->soil_type = $request->soil_type;
            $Crop->soil_analyses = '/uploads/soilanalyses/'.$filename;
            $Crop->size = $request->size;
            $Crop->save();
            $notif = Notification::all()->contains('region', $request->region);
            $forCrop = Notification::all()->contains('plantation_id', $request->crop);
            $forType = Notification::all()->contains('plantation_type', $request->plantation_type);
            if ($notif && $forCrop && $forType) {
                $notifications = Notification::where('region', $request->region)
                    ->where('plantation_id', $request->crop)
                    ->where('plantation_type', $request->plantation_type)
                    ->get();
                foreach ($notifications as $notification) {
                    $user_notif = new userNotification();
                    $user_notif->notification_id = $notification->id;
                    $user_notif->user_id = auth()->id();
                    $user_notif->save();
                }
            }
            return redirect()->back()->with('message', 'Sizin Əkin uğurla yaradıldı');
        }
    }

    public function calculate(){

        return view('dragro.farmer.crops.calculate', compact('materials', 'technics', 'employee', 'others'));
    }

    public function getCrops($id){
        
        $crops = Plant::where('type_id', $id)->get();

        return response()->json([
            'success'   => true,
            'crops'     => $crops
        ]);
    }

    public function getExpense($id)
    {
        $expenses = Expense::where('plant_id', $id)->get();

        $data = [
            1 => [],
            2 => [],
            3 => [],
            4 => []
        ];

        foreach ($expenses as $expense){
            $data[$expense->type_expense][] = $expense;
        }

        return response()->json([
            'success'   => true,
            'expenses'     => $data
        ]);
    }
    public function getExactExpense($id)
    {
        $exactexpense = Expense::where('id', $id)->first();

        return response()->json([
            'success'   => true,
            'exactexpense'     => $exactexpense
        ]);
    }
}
