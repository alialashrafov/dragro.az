<?php


namespace App\Http\Controllers\Api;


use App\App;
use App\Http\Controllers\Controller;
use App\Models\Farmer;
use App\User;

class UserController extends Controller
{
    public function profile(){
        $User = User::find(App::$user->id);
        dd($User);
        $data = [
            'id'    => $User->id,
            'fullname' => $User->name,
            'email' => $User->email,
            'avatar'    => '',
            'balances'  => [
                ['value' => 0, 'currency' => 'AZN']
            ],
            'services'  => []
        ];

        return response()->json([
            'success' => true,
            'data'    => $data
        ]);
    }

    public function unreadMessages(){

        return response()->json([
            'success' => true,
            'datunreaded_message_counta'    => 0
        ]);
    }

    public function notifications(){
        return response()->json([
            'success' => true,
            'total'    => 0,
            'pages'    => 0,
            'unread_count'    => 0,
            'data'  => []
        ]);
    }

    public function edit(){
        $User = User::find(App::$user->id);
        $Farmer = Farmer::where('user_id', $User->id)->first();
        $name = explode(' ', $User->name);
        $data = [
            'id'    => $User->id,
            'fullname' => $User->name,
            'first_name'  => $name[0],
            'last_name'  => $name[1] || '',
            'email' => $User->email,
            'avatar'    => '',
            'phone' => $Farmer->phone,
            'balances'  => [
                ['value' => 0, 'currency' => 'AZN']
            ],
            'services'  => []
        ];

        return response()->json($data);
    }
}
