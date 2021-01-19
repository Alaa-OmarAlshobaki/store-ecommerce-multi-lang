<?php

namespace App\Http\Controllers\Site;

use App\Basket\Basket;
use Illuminate\Http\Request;
use App\Exceptions\QuantityExceededException;
use DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

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
        $product=Product::where('slug',$slug)

    }
}
