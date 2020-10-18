<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingValidRequest;

class SettingController extends Controller
{
    public function ViewMethodShipping($type){
        if($type ==='free')
        {
         $shipping =Setting::where('key','free_shipping_label')->first();
        }
        elseif ($type ==='local') 
        {
         $shipping =  Setting::where('key','local_label')->first();
        }
        elseif ($type ==='outer') 
        {
          $shipping = Setting::where('key','outer_label')->first();
        }
        else
        {
         $shipping = Setting::where('key','free_shipping_label')->first();
        }
        return view('admin.edit-method-shipping',compact('shipping'));
    }
    public function EditMethodShipping(ShippingValidRequest $request ,$id){
     return $shipping_

    }
}