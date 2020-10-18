<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function ViewMethodShipping($type){
        if($type==='free')
        {
            return Setting::where('key','free_shipping_label')->first();
            }
       
        elseif ($type==='local') {
            return Setting::where('key','local_label')->first();
        }elseif ($type==='outer') {
            return Setting::where('key','outer_label')->first();
        }
        else{
        return Setting::where('key','free_shipping_label')->first();
        }
    }
}
