<?php

namespace App\Http\Controllers\Farmer;

use App\Models\Crops;
use App\Models\Farmer;
use App\Models\Notification;
use App\Models\userNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Illuminate\Support\Facades\DB;


class ProfileController extends \App\Http\Controllers\Controller
{
    public function index(){
        return view('dragro.farmer.profile.edit', [
           'farmer' => Farmer::select('u.*', 'farmers.phone')->leftJoin('users as u', 'u.id', '=', 'farmers.user_id')->where('user_id', auth()->id())->first()
        ]);
    }

    public function update(Request $request){
        $Association = Farmer::where('user_id', auth()->id())->first();
        $user = User::where('id', auth()->id())->first();
        if($Association->user_id == auth()->id()){
            $user->name = $request->name;
            $user->save();

            $Association->phone = $request->phone;
            $Association->save();
        }

        return redirect()->back()->with('message', 'Profilinizə uğurla düzəliş edildi.');
    }

    public function addLogo(Request $request){
        $file = Input::file('image');

        $rules = array(
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:100000'
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back();
        }
        $folder = public_path('uploads/association');
        $filename = $file->getClientOriginalName();

        $date_append = date("Y-m-d-His-");
        $filename = $date_append.$filename;
        $upload_success = Input::file('image')->move($folder, $filename);
        if($upload_success){
            $Association = Farmer::where('user_id',auth()->id())->first();
            $Association->image = '/uploads/association/'.$filename;
            $Association->save();
        }

        return redirect()->back();
    }

    public function notification(){
        $userNotification = userNotification::all()->contains('user_id', auth()->id());
        $notifications = [];
        if($userNotification)
        {
            $userNotification = userNotification::select('notification_id')
                ->where('user_id', auth()->id())->get()->toArray();
            $notifications = Notification::whereIn('id', $userNotification)->get();
        }
        return view('dragro.farmer.notification.list', compact('notifications'));
    }

    public function readNotification($id)
    {
            $user = userNotification::where('notification_id', $id)->where('user_id', auth()->id())->first();
            $user->update(['read'=>1]);
    }
}
