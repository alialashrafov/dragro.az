<?php

namespace App\Http\Controllers\DrAgro;

use App\Models\About;
use App\Models\Setting;
use Illuminate\Http\Request;


class SettingsController extends \App\Http\Controllers\Controller
{
    public function show(){
        return view('dragro.dragro.settings.edit', [
           'settings' => Setting::find(1)
        ]);
    }

    public function update(Request $request){

        $Setting = Setting::find(1);
        $Setting->address = $request->address;
        $Setting->phones = $request->phones;
        $Setting->email = $request->email;
        $Setting->privacy = $request->privacy;
        $Setting->terms = $request->terms;

        $Setting->title = $request->title;
        $Setting->content = $request->content;
        $Setting->facebook = $request->facebook;
        $Setting->instagram = $request->instagram;
        $Setting->twitter = $request->twitter;
        $Setting->youtube = $request->youtube;
        $Setting->youtube_index = $request->youtube_index;

        $Setting->save();
        return redirect()->back();
    }
}
