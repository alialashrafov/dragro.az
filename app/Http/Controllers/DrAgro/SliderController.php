<?php
namespace App\Http\Controllers\DrAgro;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Illuminate\Support\Facades\Validator;

class SliderController extends \App\Http\Controllers\Controller
{

    public function index(){
        $Slider = Slider::paginate(20);
        return view('dragro.dragro.slider.list', compact('Slider'));
    }

    public function create(){
        return view('dragro.dragro.slider.create');
    }

    public function store(Request $request){
        $file = Input::file('file');

        $rules = array(
            'file' => 'mimes:jpeg,jpg,png,gif|required|max:100000'
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back();
        }

        $folder = public_path('uploads/slider');
        $filename = $file->getClientOriginalName();

        $date_append = date("Y-m-d-His-");
        $filename = $date_append.$filename;
        $upload_success = Input::file('file')->move($folder, $filename);

        if($upload_success){
            $Slider = new Slider();
            $Slider->text_az = $request->text_az;
            $Slider->text_en = $request->text_en;
            $Slider->text_ru = $request->text_ru;
            $Slider->image = '/uploads/slider/'.$filename;
            $Slider->save();
        }

        return redirect()->back();
    }

    public function edit($id){
        $Slider = Slider::find($id);

        return view('dragro.dragro.slider.edit', compact('Slider'));
    }

    public function update(Request $request, $id){
        $Slider = Slider::find($id);
        $file = Input::file('file');
        if($file){
            $rules = array(
                'file' => 'mimes:jpeg,jpg,png,gif|max:100000'
            );
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                return redirect()->back();
            }
            $folder = public_path('uploads/slider');
            $filename = $file->getClientOriginalName();

            $date_append = date("Y-m-d-His-");
            $filename = $date_append.$filename;
            $Slider->image = '/uploads/slider/'.$filename;
            Input::file('file')->move($folder, $filename);
        }
        $Slider->text_az = $request->text_az;
        $Slider->text_en = $request->text_en;
        $Slider->text_ru = $request->text_ru;
        $Slider->save();

        return redirect()->back();
    }

    public function delete($id){
        $Slider = Slider::find($id);

        if(Auth::user()->type == 'Employee'){
            $Slider->delete();
        }
        return redirect()->back();
    }
}
