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
    public function __construct(Basket $basket)
    {
        return $this->basket = $basket;
    }

    public function ViewCart()
    {
        $basket = $this->basket;
        return view('home.cart', compact('basket'));
    }

    public function AddToCart(Request $request)
    {
        $slug = $request->product_slug;
        $product = Product::where('slug', $slug)->first();
        if (!$product)
            return "no product on cart";
        try {
            if ($this->basket->has($product))
                return response()->json(['status' => true, 'wished' => false]);

            $this->basket->add($product, $request->quantity ?? 1);

            return response()->json(['status' => true, 'wished' => true]);
        } catch (QuantityExceededException $e) {
            return 'Quantity Exceeded';
        }
    }


    public function Destroy(Request $request)
    {
        try {

            $slug=$request->product_slug;
            $item=Product::where('slug',$slug)->first();
            if(!$item)
            return "no product on this cart"
            if($this->basket->has($item))
            return response()->json(['status' => true, 'wished' => false]);
        } catch (QuantityExceededException $e) {
            return 'Quantity Exceeded';
        }
    }
}
