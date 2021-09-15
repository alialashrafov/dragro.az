<?php
namespace App\Http\Controllers\DrAgro;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;

class BlogController extends \App\Http\Controllers\Controller
{

    public function index(){
        $Blogs = Blog::orderBy('id', 'Desc')->paginate(15);
        return view('dragro.dragro.blog.list', compact('Blogs'));
    }

    public function create(){
        return view('dragro.dragro.blog.create');
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

        $folder = public_path('uploads/blog');
        $filename = $file->getClientOriginalName();

        $date_append = date("Y-m-d-His-");
        $filename = $date_append.$filename;
        $upload_success = Input::file('file')->move($folder, $filename);

        if($upload_success){
            $Blog = new Blog();
            $Blog->title = $request->title;
            $Blog->content = $request->content;
            $Blog->image = '/uploads/blog/'.$filename;
            $Blog->language = $request->language;
            $Blog->save();

        }

        return redirect()->back();
    }

    public function edit($id){
        $Blog = Blog::find($id);

        return view('dragro.dragro.blog.edit', compact('Blog'));
    }

    public function update(Request $request, $id){
        $Blog = Blog::find($id);

        $file = Input::file('file');
        if($file){
            $rules = array(
                'file' => 'mimes:jpeg,jpg,png,gif|required|max:100000'
            );
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                return redirect()->back();
            }
            $folder = public_path('uploads/blog');
            $filename = $file->getClientOriginalName();

            $date_append = date("Y-m-d-His-");
            $filename = $date_append.$filename;
            $Blog->image = '/uploads/blog/'.$filename;
            Input::file('file')->move($folder, $filename);
        }

        if(auth()->id() == $Blog->association_id){
            $Blog->title = $request->title;
            $Blog->content = $request->content;
            $Blog->language = $request->language;
            $Blog->save();
        }

        return redirect()->back();
    }

    public function delete($id){
        $Blog = Blog::find($id);

        if(Auth::user()->type == 'Employee'){
            $Blog->delete();
        }
        return redirect()->back();
    }
}
