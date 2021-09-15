<?php
namespace App\Http\Controllers\DrAgro;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Illuminate\Support\Facades\Validator;


class ProductsController extends \App\Http\Controllers\Controller
{

    public function index(){
        $Products = Product::orderBy('id', 'Desc')->paginate(15);
        return view('dragro.dragro.product.list', compact('Products'));
    }

    public function create(){
        return view('dragro.dragro.product.create');
    }

    public function store(Request $request){
        $file = Input::file('file');

        $rules = array(
            'title' => 'required',
            'price' => 'required',
            'file' => 'mimes:jpeg,jpg,png,gif|required|max:100000'
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back();
        }

        $folder = public_path('uploads/product');
        $filename = $file->getClientOriginalName();

        $date_append = date("Y-m-d-His-");
        $filename = $date_append.$filename;
        $upload_success = Input::file('file')->move($folder, $filename);

        if($upload_success){
            $Blog = new Product();
            $Blog->title = $request->title;
            $Blog->description = $request->description;
            $Blog->image = '/uploads/product/'.$filename;
            $Blog->price = $request->price;
            $Blog->save();
        }

        return redirect()->back();
    }

    public function edit($id){
        $Product = Product::find($id);
        return view('dragro.dragro.product.edit', compact('Product'));
    }

    public function update(Request $request, $id){
        $Product = Product::find($id);

        $file = Input::file('file');
        if($file){
            $rules = array(
                'file' => 'mimes:jpeg,jpg,png,gif|required|max:100000'
            );
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                return redirect()->back();
            }
            $folder = public_path('uploads/product');
            $filename = $file->getClientOriginalName();

            $date_append = date("Y-m-d-His-");
            $filename = $date_append.$filename;
            $Product->image = '/uploads/product/'.$filename;
            Input::file('file')->move($folder, $filename);
        }

            $Product->price = $request->price;
            $Product->title = $request->title;
            $Product->description = $request->description;
            $Product->save();

        return redirect()->back();
    }

    public function delete($id){
        $Blog = Product::find($id);

        if(Auth::user()->type == 'Employee'){
            $Blog->delete();
        }
        return redirect()->back();
    }
}
