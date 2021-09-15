<?php
namespace App\Http\Controllers\DrAgro;

use App\Models\Crop;
use App\Models\Notification;
use App\Models\Plant;
use App\Models\PlantationTypes;
use App\Models\Regions;
use App\Models\userNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;
use View;

class NotificationController extends \App\Http\Controllers\Controller
{
//    public $plantationTypes;

    public function __construct()
    {
        parent::__construct();
        $regions = Regions::getRegions();
        $this->plantationTypes = PlantationTypes::all();
        View::share('types', $this->plantationTypes);
        View::share('plantationTypes', PlantationTypes::getTypes());



        View::share('regions', $regions);
    }

    public function index(){
        $notifications = Notification::orderBy('id', 'Desc')->paginate(15);
        return view('dragro.dragro.notification.list', compact('notifications'));
    }

    public function create(){
        //$Notification = Notification::orderBy('id', 'Desc')->paginate(15);
        return view('dragro.dragro.notification.create');
    }


    public function store(Request $request){
        $Notification = new Notification();
        $Notification->title = $request->title;
        $Notification->text = $request->text;
        $Notification->region = $request->region;
        $Notification->plantation_id = $request->plantation_id;
        $Notification->plantation_type = $request->plantation_type;

        $Notification->save();

        $users = Crop::select('user_id')->where('region', $request->region)->get()->unique('user_id');

        foreach($users as $user){
            $userNotification = new userNotification();
            $userNotification->user_id = $user->user_id;
            $userNotification->notification_id = $Notification->id;
            $userNotification->save();
        }

        return redirect()->back();
    }

    public function edit($id){
        $Notification = Notification::find($id);
        return view('dragro.dragro.notification.edit', compact('Notification'));
    }

    public function update(Request $request, $id){
        $Notification = Notification::find($id);
        if($Notification->region == $request->region)
        {
            $Notification->save();
        }
        else
        {
            $users = Crop::select('user_id')->where('region', $request->region)->get()->unique('user_id');
            userNotification::where('notification_id', $Notification->id)->delete();
            foreach($users as $user){
                $userNotification = new userNotification();
                $userNotification->user_id = $user->user_id;
                $userNotification->notification_id = $Notification->id;
                $userNotification->save();
            }
        }
        $Notification->title = $request->title;
        $Notification->text = $request->text;
        $Notification->region = $request->region;
        $Notification->save();
        return redirect()->back();
    }

    public function delete($id){
        $Notification = Notification::find($id);
        $Notification->delete();

        return redirect()->back();
    }
    public function getCrops($id){

        $crops = Plant::where('type_id', $id)->get();

        return response()->json([
            'success'   => true,
            'crops'     => $crops
        ]);
    }
}
