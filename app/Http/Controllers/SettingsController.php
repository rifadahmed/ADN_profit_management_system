<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{

    public function edit(){

        $settings = Setting::where('key', 'total_share')->get();
        foreach( $settings AS $settings){

            $settings->key;
        }
        
        return view('settings.edit', compact('settings'));

    }

    public function update(Request $request, $id){

        $validateDate = $request->validate([
            'value' => 'required'
        ]);

        $settings = Setting::find($id);
        $settings->value = $request->value;
        $settings->save();

        return redirect()->route('settings.edit');;
    }
}
