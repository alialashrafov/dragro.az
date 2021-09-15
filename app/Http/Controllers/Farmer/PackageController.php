<?php
namespace App\Http\Controllers\Farmer;

use App\Models\Contact;
use App\Models\MessageContent;
use App\Models\Messages;
use App\User;
use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Input;
use Validator;


class PackageController extends \App\Http\Controllers\Controller
{

    public function lists(){
        $user = User::where('id', auth()->id())->first();
        return view('dragro.farmer.packages.list', compact('packages', 'user'));
    }

}
