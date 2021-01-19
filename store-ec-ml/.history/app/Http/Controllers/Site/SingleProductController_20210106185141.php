<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleProductController extends Controller
{
    public function Index(Request $request,$slug){
        $data=[];
        $data['product']= Product::where('slug',$slug)->first();
        if(!$data['product'])
        return redirect()->back()->with(['fail' => 'cant found product for this data']);
        $productId= $data['product']->id;
        /**
         * return all id cattegory for this product
         * this to return all product on same category 
         * to (related product)
         */
        $categoryIds= $data['product']->Categories->pluck('id');
        $data['related_products'] =Product::whereHas('Categories',function($cat){
            $cat->whereIn('Categories.id',$categoryIds);

        })->limit(20);
        
    
      

    }
}
