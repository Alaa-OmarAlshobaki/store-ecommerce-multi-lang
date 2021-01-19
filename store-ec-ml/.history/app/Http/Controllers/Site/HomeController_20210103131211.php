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
        $data['categories'] = Category::Active()->parent()->select('id', 'slug')->orderById('id','DESC')->with(['SubCate' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['SubCate' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();
        return view('home.index', $data);
    }
}
