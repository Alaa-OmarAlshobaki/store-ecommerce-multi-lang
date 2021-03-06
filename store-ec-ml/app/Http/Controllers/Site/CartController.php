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

            $this->basket->add($product, $request->quantity ?? 1);
            return response()->json(['status' => true, 'cart' => true]);
        } catch (QuantityExceededException $e) {
            return 'Quantity Exceeded';
        }
    }

    public function DeleteItem($slug, Request $request)
    {

        $_product = Product::where('slug', $slug)->firstOrFail();

        try {
            $this->basket->update($_product, $request->quantity);
        } catch (QuantityExceededException $e) {
            return trans('site.cart.msgs.exceeded');
        }

        if (!$request->quantity) {
            return array_merge([
                'total' => num_format($this->basket->subTotal()) 
            ]);
        }
    }
}
