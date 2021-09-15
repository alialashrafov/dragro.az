<?php
namespace App\Http\Controllers\DrAgro;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;
use Composer\Config;


class AboutController extends \App\Http\Controllers\Controller
{

    public function show(){
         $langu = request()->segment(1);
         $About = About::where('language', $langu)->first();
         return view('dragro.dragro.about.form', compact('About'));
    }

    public function update(Request $request, $id){
        $About = About::find($id);

         $file = Input::file('file');
                if($file){
                    $rules = array(
                        'file' => 'mimes:jpeg,jpg,png,gif|required|max:100000'
                    );
                    $validator = Validator::make($request->all(), $rules);
                    if($validator->fails()){
                        return redirect()->back();
                    }
                    $folder = public_path('uploads/about');
                    $filename = $file->getClientOriginalName();

                    $date_append = date("Y-m-d-His-");
                    $filename = $date_append.$filename;
                    $About->image = '/uploads/about/'.$filename;
                    Input::file('file')->move($folder, $filename);
                }

        $About->title = $request->title;
        $About->content = $request->content;
        $About->save();
        return redirect()->back();
    }

}
