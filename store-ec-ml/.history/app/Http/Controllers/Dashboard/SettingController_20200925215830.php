<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function ViewMethodShipping($type){
        if($type==='free')
        { return Setting::all();}
       
        elseif ($type==='local') {
            return Setting::all();
        }elseif ($type==='outer') {
            return Setting::all();
        }
        else
        return Setting::all();
    }
}