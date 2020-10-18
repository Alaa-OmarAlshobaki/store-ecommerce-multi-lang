<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingValidRequest;
use Validator;

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
      try
      $shipping_method=Setting::find($id);
      $shipping_method->update([
        'plain_value'=>$request->plain_value
        ]);
        $shipping_method->value=$request->value;
        $shipping_method->save();

    }
}
