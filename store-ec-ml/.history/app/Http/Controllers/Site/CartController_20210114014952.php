<?php

namespace App\Http\Controllers\Site;

use DB;
use App\Basket\Basket;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Exceptions\QuantityExceededException;

class CartController extends Controller
{
    protected $Basket;
    protected $id;
    public function __construct(Basket $basket){
        return $this->basket=$basket;

    }
    
    public function ViewCart(){
        $basket=$this->basket;
        return view('home.cart',compact('basket'));

    }

    public function AddToCart(Request $request){
        $slug= $request->slug;
        $product=Product::where('slug',$slug)->firstOrFail();
       try{
           $this->basket->add($product,$request->quantity ?? 1);

       }catch(QuantityExceededException $e){
        return 'Quantity Exceeded'; 
       }
       return 'p'


    }
}
