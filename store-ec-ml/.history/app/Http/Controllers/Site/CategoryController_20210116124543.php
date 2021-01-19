<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $Basket;
    protected $id;


    public function __construct(Basket $basket)
    {
        return $this->basket = $basket;
    }


    public function CategoryBySlug($slug){
        $cate=[];
        $cate['cat']=Category::where('slug',$slug)->first();
        if($cate['cat'])
        $cate['product']= $cate['cat']->Product;

        $cate['categories'] = Category::Active()->parent()->select('id', 'slug')->orderBy('id','DESC')->with(['SubCate' => function ($q) {
            $q->select('id', 'parent_id', 'slug');
            $q->with(['SubCate' => function ($qq) {
                $qq->select('id', 'parent_id', 'slug');
            }]);
        }])->get();
        return view('home.product',$cate);

       
        

    }

}
