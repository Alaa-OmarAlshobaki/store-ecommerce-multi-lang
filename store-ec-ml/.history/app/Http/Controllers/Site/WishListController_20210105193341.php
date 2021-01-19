<?php

namespace App\Http\Controllers\Site;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function Store(Request $request) {
            
            if(! auth()->user()->wishlistHas(request('productId'))){
             auth()->user()->with('wishlist'(->attach(request('productId'));
             return "jjjjjjjjjjjjjjjjjjj";
            }

     
}
}
