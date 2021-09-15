<?php
namespace App\Http\Controllers\DrAgro;

use App\Models\PlantationTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;

class PlantTypesController extends \App\Http\Controllers\Controller
{

    public function index(){
        $PlantationTypes = PlantationTypes::orderBy('id', 'Desc')->paginate(15);
        return view('dragro.dragro.plant-types.list', compact('PlantationTypes'));
    }

    public function create(){
        return view('dragro.dragro.plant-types.create');
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

    public function edit($id){
        $plantationType = PlantationTypes::find($id);
        return view('dragro.dragro.plant-types.edit', compact('plantationType'));
    }

    public function update(Request $request, $id){

        $rules = array(
            'title' => 'name',
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back();
        }

        $Type = PlantationTypes::find($id);
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
