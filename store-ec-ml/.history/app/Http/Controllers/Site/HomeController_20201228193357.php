<?php

namespace App\Http\Controllers\Site;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**slider image */
    public function  Slider(){
        $slider=Slider::get();
    }
}
