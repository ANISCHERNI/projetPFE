<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingsContoller extends Controller
{
    //

    public function index(){

       return view('settings.settings')->with('setting',Setting::first());
}


    public function update(Request $request){


        $this->validate($request,[
            'blog_name'=>'required',
            'phone_number'=>'required',
            'blog_email'=>'required',   
            'adress'=>'required',

        ]);

            $setting=Setting::first();

            $setting->blog_name=$request->blog_name;
            $setting->phone_number=$request->phone_number;
            $setting->blog_email=$request->blog_email;
            $setting->adress=$request->adress;
$setting->save();
return redirect()->back();


    }
}
