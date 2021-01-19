<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function CategoryBySlug($slug){
        $cate=[];
        $cate['cat']=Category::where('slug',$slug)->first();
        if($cat['cat'])
        $cat['product']= $cat['cat']->Product;
        return view('home.index', $cat);

       
        

    }

}
