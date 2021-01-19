<?php

namespace App\Http\Controllers\Site;

use App\Models\Option;
use App\Models\Product;
use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleProductController extends Controller
{
    public function Index(Request $request, $slug)
    {
        $data = [];
        $data['product'] = Product::where('slug', $slug)->first();
        if (!$data['product'])
            return redirect()->back()->with(['fail' => 'cant found product for this data']);
        $productId = $data['product']->id;
        /**
         * return all id cattegory for this product
         * this to return all product on same category 
         * to (related product)
         */
        $categoryId = $data['product']->Categories->pluck('id');
        $data['related_products'] = Product::whereHas('Categories', function ($cat) use ($categoryId) {
            $cat->whereIn('Categories.id', $categoryId);
        })->limit(20)->latest()->get();
        /**
         * return attribute for product 
         */
           return  $data['product_attribute']=Attribute::with('Option',function($qq)use( $productId){
              $qq->where('product_id',$productId);
           })->whereHas('Option')->get();
     
      
        return view('home.include.singleProduct',$data);
       
    }
}
