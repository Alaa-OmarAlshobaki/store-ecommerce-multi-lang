<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function ViewImages(){
        $slider=Slider::get(['photo']);
        return view('admin.slider.slider',compact('slider'));
    }
    
}
