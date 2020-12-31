<?php

namespace App\Http\Controllers\Site;

use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**slider image */
    public function  Index()
    {
        $data = [];
        $data['sliders'] = Slider::get(['photo']);
        $data['categories'] = Category::parent()->select('id', 'slug')->with(['childrens' => function ($q) {
           $q->select('id', 'parent_id', 'slug');
           $q->with(['childrens' => function ($qq) {
               $qq->select('id', 'parent_id', 'slug');
           }]);
       }])->get();
       return view('front.home', $data);
        // $data = [];
        // $data['slider'] = Slider::get();
        // $data['product'] = Category::Parent()->select('id', 'slug')->with(['SubCate' => function ($q) {
        //     $q->select('id', 'parent_id', 'slug');
        //     $q->with(['SubCate' => function ($query) {
        //         $query->select('id', 'parent_id', 'slug');
        //     }]);
        // }])->get();

        // return view('home.index',compact('data'));
    }
}
