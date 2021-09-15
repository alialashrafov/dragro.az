<?php
namespace App\Http\Controllers\Farmer;

use App\Models\Contact;
use App\Models\MessageContent;
use App\Models\Messages;
use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Input;
use Validator;


class MessageController extends \App\Http\Controllers\Controller
{

    public function lists(){
        $messages = [];
        $Message = Messages::where('farmer_id', auth()->id())->first();
        if($Message){
            $messages = MessageContent::select('*')
                ->leftJoin('users as u', 'u.id', '=', 'message_content.user_id')->where('message_id', '=', $Message->id)->get();
            $adminMessage = MessageContent::where('message_id', $Message->id)
                ->where('user_id', '!=', auth()->id())->orderBy('id', 'DESC')->first();

            if($adminMessage)
            {
                $readed = MessageContent::find($adminMessage->id);
                $readed->read = 1;
                $readed->save();
            }
        }

        return view('dragro.farmer.messages.list', compact('messages'));
    }

    public function store(Request $request){
        $Message = Messages::where('farmer_id', auth()->id())->first();

        if(!$Message){
            $Message = new Messages();
            $Message->farmer_id = auth()->id();
            $Message->save();
        }
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
        $MessageContent->file_exist = $request->file_exist;
        $MessageContent->message_id = $Message->id;
        $MessageContent->user_id = auth()->id();
        $MessageContent->save();

        return redirect()->back();

    }


}
