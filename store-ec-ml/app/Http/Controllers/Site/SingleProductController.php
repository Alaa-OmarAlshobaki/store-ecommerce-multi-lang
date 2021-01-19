<?php

namespace App\Http\Controllers\Site;

use App\Basket\Basket;
use App\Models\Option;
use App\Models\Product;
use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleProductController extends Controller
{
    protected $Basket;
    protected $id;


    public function __construct(Basket $basket)
    {
        return $this->basket = $basket;
    }

    public function Index(Request $request, $slug)
    {
       
        $data = [];
        $data['basket']= $this->basket;
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
        // return $data['product_attribute']=Attribute::whereHas('Option',function($optionPdoduct) use($productId){
        //    $optionPdoduct->where('product_id',$productId)->whereHas('Product',function($product) use($productId){
        //        $product->where('product_id',$productId);

        //    });
        // })->get();


        $data['product_attribute']=Option::whereHas('Product',function($q) use($productId){
            $q->where('product_id',$productId);
        })->with('Attribute')->get();
     
      
        return view('home.include.singleProduct',$data);
       
    }
    public function View(Request $request, $slug)
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
        // return $data['product_attribute']=Attribute::whereHas('Option',function($optionPdoduct) use($productId){
        //    $optionPdoduct->where('product_id',$productId)->whereHas('Product',function($product) use($productId){
        //        $product->where('product_id',$productId);

        //    });
        // })->get();


        $data['product_attribute']=Option::whereHas('Product',function($q) use($productId){
            $q->where('product_id',$productId);
        })->with('Attribute')->get();
     
      
        return view('home.include.singleProduct',$data);
       
    }
}
