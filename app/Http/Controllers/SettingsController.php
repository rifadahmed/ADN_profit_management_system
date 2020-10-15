<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function update(Request $request, $id){

        $validateDate = $request->validate([
            'value' => 'required'
        ]);

        $settings = Setting::find($id);
        $settings->value = $request->value;
        $settings->save();

        return redirect()->route('settings.show');;
    }



    public function show(){

        $settings = Setting::all()->first();
        #return $settings;

        return view('settings.show', compact('settings'));

    }
}
