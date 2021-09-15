<?php
namespace App\Http\Controllers\DrAgro;

use App\Models\Plant;
use App\Models\Expense;
use App\Models\PlantationTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;
use Illuminate\Support\Facades\DB;

class PlantsController extends \App\Http\Controllers\Controller
{

    public function index(Request $request){
        $Plants = Plant::select('plants.*', 't.name as type')
            ->leftJoin('type_of_plants as t', 't.id', '=', 'plants.type_id');

        if($request->has('type') && $request->type > 0)
            $Plants = $Plants->where('plants.type_id', $request->type);

        $Plants = $Plants->orderBy('id', 'Desc')
            ->paginate(50);
        return view('dragro.dragro.plants.list', compact('Plants'));
    }

    public function create(){
        $Types = PlantationTypes::all();
        $types_expenses = DB::table('expenses_type')->get();
        return view('dragro.dragro.plants.create', compact('Types', 'types_expenses'));
    }

    public function store(Request $request){
        $upload_success = false;
        $file = Input::file('file');
        if($file){
            $folder = public_path('uploads/plants');
            $filename = $file->getClientOriginalName();

            $date_append = date("Y-m-d-His-");
            $filename = $date_append.$filename;
            $upload_success = Input::file('file')->move($folder, $filename);
        }

        $Plant = new Plant();
        $Plant->type_id = $request->type_id;
        $Plant->name = $request->name;
        $Plant->price = $request->price;
        $Plant->yield = $request->yield;
        $Plant->sales_price = $request->sales_price;
        $Plant->one_time_subsidy = $request->one_time_subsidy;
        $Plant->subsidy = $request->subsidy;
        if($upload_success)
            $Plant->plan_doc = '/uploads/plants/'.$filename;

        $Plant->save();
        $Expense = new Expense();

        $Expense->named = $request->named;
        $Expense->pricing = $request->pricing;
        $Expense->quantity = $request->quantity;
        $Expense->quantity_type = $request->quantity_type;
        $Expense->type_expense = $request->type_expense;
        $Expense->plant_id = $Plant->id;
        $Expense->save();

        for($i = 1; $i <= $request->forback; $i++)
        {
            $Expense = new Expense();

            $named = "named$i";
            $pricing = "pricing$i";
            $quantity = "quantity$i";
            $type_expense = "type_expense$i";
            $quantity_type = "quantity_type$i";
            if($request->$named != null)
            {
                $Expense->named = $request->$named;
                $Expense->pricing = $request->$pricing;
                $Expense->quantity = $request->$quantity;
                $Expense->quantity_type = $request->$quantity_type;
                $Expense->type_expense = $request->$type_expense;
                $Expense->plant_id = $Plant->id;
                $Expense->save();
            }


        }
        return redirect()->back();
    }

    public function edit($id){
        $Types = PlantationTypes::all();
        $Plant = Plant::find($id);
        $types_expenses = DB::table('expenses_type')->get();
        $expenses = Expense::where('plant_id', $Plant->id)->get();

        return view('dragro.dragro.plants.edit', compact('Types', 'Plant','types_expenses','expenses'));
    }

    public function update(Request $request, $id)
    {
        $upload_success = false;
        $file = Input::file('file');
        if($file){
            $folder = public_path('uploads/plants');
            $filename = $file->getClientOriginalName();
            $date_append = date("Y-m-d-His-");
            $filename = $date_append.$filename;
            $upload_success = Input::file('file')->move($folder, $filename);
        }

        $Plant = Plant::find($id);
        $Plant->type_id = $request->type_id;
        $Plant->name = $request->name;
        $Plant->price = $request->price;
        $Plant->yield = $request->yield;
        $Plant->sales_price = $request->sales_price;
        $Plant->one_time_subsidy = $request->one_time_subsidy;
        $Plant->subsidy = $request->subsidy;
        if($upload_success)
            $Plant->plan_doc = '/uploads/plants/'.$filename;

        $Plant->save();
        $data = [];
        $check1 = Expense::where('id', $request->id)->where('plant_id', $id)->first();
        if($check1)
        {
            $Expense1 = Expense::find($check1->id);
            $data[0] = $request->id;
            $Expense1->named = $request->named;
            $Expense1->pricing = $request->pricing;
            $Expense1->quantity = $request->quantity;
            $Expense1->type_expense = $request->type_expense;
            $Expense1->quantity_type = $request->quantity_type;
            $Expense1->plant_id = $Plant->id;
            $Expense1->save();
        }
        for($i = 1; $i <= $request->forback; $i++) {
            $named = "named$i";
            $pricing = "pricing$i";
            $quantity = "quantity$i";
            $type_expense = "type_expense$i";
            $quantity_type = "quantity_type$i";
            $idd = "id$i";
            $check = Expense::where('id', $request->$idd)->first();
            if($check){
                $data[] = $request->$idd;
                $Expense = Expense::find($check->id);
                $Expense->named = $request->$named;
                $Expense->pricing = $request->$pricing;
                $Expense->quantity = $request->$quantity;
                $Expense->quantity_type = $request->$quantity_type;
                $Expense->type_expense = $request->$type_expense;
                $Expense->plant_id = $Plant->id;
                $Expense->save();
            }elseif($request->$named != null)
            {
                $Expense = new Expense();
                $Expense->named = $request->$named;
                $Expense->pricing = $request->$pricing;
                $Expense->quantity = $request->$quantity;
                $Expense->quantity_type = $request->$quantity_type;
                $Expense->type_expense = $request->$type_expense;
                $Expense->plant_id = $Plant->id;
                $Expense->save();
                $data[] = "$Expense->id";
            }
        }
        if(!empty($data)){
            $exp = Expense::where('plant_id',$id)->whereNotIn('id', $data)->delete();
        }


        return redirect()->back();
    }

    public function delete($id){
        $Plant = Plant::find($id);
        if(Auth::user()->type == 'Employee'){
            $Plant->delete();
            Expense::where('plant_id', $Plant->id)->delete();
        }
        return redirect()->back();
    }
}
