<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function CategoryBySlug($slug){
        // $cate=[];
        // $cate['cat']=Category::where('slug',$slug)->first();
        // if($cate['cat'])
        // $cat['product']= $cate['cat']->Product;
        // return view('home.index', $cate);

        $cate = [];
        $cate['category'] = Category::where('slug', $slug)->first();

        if ($cate['category'])
            $data['products'] = $data['category']->products;

        return view('front.products', $data);

       
        

    }

}