<?php

namespace App\Http\Controllers\Site;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishListController 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products =  auth()->user()
            ->wishlist()
            ->latest()
            ->get();   // task for you basically we need to use pagination here
        return view('front.wishlists', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store()
    {
        $user=auth()->user()->id;

       return User::where('id',$user)->first

            // User::with('wishlist')->attach(request('productId'));
            // return response() -> json(['status' => true , 'wished' => true]);
        //  }
        // return response() -> json(['status' => true , 'wished' => false]);  // added before we can use enumeration here
    }

    /**
     * Destroy resources by the given id.
     *
     * @param string $productId
     * @return void
     */
    public function destroy()
    {
        auth()->user()->wishlist()->detach(request('product_id'));
    }
}
