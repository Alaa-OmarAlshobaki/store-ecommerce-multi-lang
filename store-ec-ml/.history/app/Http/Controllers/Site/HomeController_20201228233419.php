<?php

namespace App\Http\Controllers\Site;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**slider image */
    public function  Index(){
        $data=[];
        $data['slider']=Slider::get();
        $data['product']=Category::select()
        return view('home.index',compact('data'));
    }
}
