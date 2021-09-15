<?php
namespace App\Http\Controllers\DrAgro;

use App\Models\MessageContent;
use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;


class MessageController extends \App\Http\Controllers\Controller
{
    public function index(){
        $messages = Messages::select('messages.id', 'u.name')
            ->leftJoin('users as u', 'u.id', '=', 'messages.farmer_id')->get();
        return view('dragro.dragro.messages.list', compact('messages'));
    }

    public function show($id){
        $messages = MessageContent::select('*')
            ->leftJoin('users as u', 'u.id', '=', 'message_content.user_id')->where('message_id', '=', $id)->get();
        $adminMessage = MessageContent::where('message_id', $id)
            ->where('user_id', '!=', auth()->id())->orderBy('id', 'DESC')->get();
        if($adminMessage)
        {
            MessageContent::where('message_id', $id)
                ->where('user_id', '!=', auth()->id())->orderBy('id', 'DESC')->update(['read'=>1]);
        }

        return view('dragro.dragro.messages.messages', compact('messages', 'id'));
    }

    public function store(Request $request){
        $MessageContent = new MessageContent();

        $file = Input::file('file');
        if($file){
            $rules = array(
                'file' => 'required|max:100000'
            );
            $validator = Validator::make($request->all(), $rules);
            if($validator->fails()){
                return redirect()->back();
            }
            $folder = public_path('uploads/messages');
            $filename = $file->getClientOriginalName();

            $date_append = date("Y-m-d-His-");
            $filename = $date_append.$filename;
            $MessageContent->message = '/uploads/messages/'.$filename;
            Input::file('file')->move($folder, $filename);
        }else
        {
            $MessageContent->message = $request->message;
        }
        $MessageContent->message_id = $request->message_id;
        $MessageContent->file_exist = $request->file_exist;
        $MessageContent->user_id = auth()->id();
        $MessageContent->save();




        return redirect()->back();

    }
}
