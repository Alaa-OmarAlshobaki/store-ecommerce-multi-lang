<?php

namespace App\Http\Controllers\Site;

use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**slider image */
    public function  Index(){
        $data=[];
        $data['slider']=Slider::get();
        $data['product']=Category::Parent()->select('id','slug')->with(['SubCate'=>function($q){
            $q->select('id','parent_id','slug');
            $q->with(['SubCate'=>fu])
        }])
        return view('home.index',compact('data'));
    }
}