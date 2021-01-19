<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
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
        $data['product_attribute']=Attribute::whereHas('Option',function($optionPdoduct) use($productId){
           $optionPdoduct->whereHas('Product',function($product) use($productId){
               $product->where('product_id')

           });
        });
       
    }
}
