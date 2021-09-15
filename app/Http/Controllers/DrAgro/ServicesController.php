<?php
namespace App\Http\Controllers\DrAgro;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;

class ServicesController extends \App\Http\Controllers\Controller
{

    public function index(){
        $Services = Service::orderBy('id', 'Desc')->paginate(15);
        return view('dragro.dragro.service.list', compact('Services'));
    }

    public function create(){
        return view('dragro.dragro.service.create');
    }

    public function store(Request $request){
        $file = Input::file('file');
        $rules = array(
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'file' => 'mimes:jpeg,jpg,png,gif|required|max:100000'
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back();
        }

        $folder = public_path('uploads/service');
        $filename = $file->getClientOriginalName();

        $date_append = date("Y-m-d-His-");
        $filename = $date_append.$filename;
        $upload_success = Input::file('file')->move($folder, $filename);

        if($upload_success){
            $Blog = new Service();
            $Blog->title = $request->title;
            $Blog->description = $request->description;
            $Blog->image = '/uploads/service/'.$filename;
            $Blog->price = $request->price;
            $Blog->save();
        }

        return redirect()->back();
    }

    public function edit($id){
        $Service = Service::find($id);

        return view('dragro.dragro.service.edit', compact('Service'));
    }

    public function update(Request $request, $id){
        $Service = Service::find($id);

        $file = Input::file('file');
        if($file){
            $rules = array(
                'file' => 'mimes:jpeg,jpg,png,gif|required|max:100000'
            );
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                return redirect()->back();
            }
            $folder = public_path('uploads/service');
            $filename = $file->getClientOriginalName();

            $date_append = date("Y-m-d-His-");
            $filename = $date_append.$filename;
            $Service->image = '/uploads/service/'.$filename;
            Input::file('file')->move($folder, $filename);
        }

            $Service->title = $request->title;
            $Service->price = $request->price;
            $Service->description = $request->description;
            $Service->save();
        return redirect()->back();
    }

    public function delete($id){
        $Blog = Service::find($id);

        if(Auth::user()->type == 'Employee'){
            $Blog->delete();
        }
        return redirect()->back();
    }
}
