<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index(){
        $slider=Slider::get(['photo']);
        return view('admin.slider.slider')
    }
}
