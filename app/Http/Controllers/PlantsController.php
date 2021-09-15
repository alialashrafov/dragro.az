<?php
namespace App\Http\Controllers\DrAgro;

use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;

class PlantsController extends \App\Http\Controllers\Controller
{

    public function index(){
        $Plants = Plant::orderBy('id', 'Desc')->paginate(15);
        return view('dragro.dragro.plants.list', compact('Plants'));
    }

    public function create(){
        return view('dragro.dragro.plants.create');
    }

    public function store(Request $request){

        $rules = array(
            'title' => 'name',
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back();
        }

        $Type = new PlantationTypes();
        $Type->name = $request->name;
        $Type->save();

        return redirect()->back();
    }

    public function delete($id){
        $Blog = PlantationTypes::find($id);

        if(Auth::user()->type == 'Employee'){
            $Blog->delete();
        }
        return redirect()->back();
    }
}
