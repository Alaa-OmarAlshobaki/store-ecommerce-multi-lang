<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function ViewMethodShipping(){
     $method= Setting::all();
    return view('welcome',compact('method'));
    }
}
