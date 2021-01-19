<?php

namespace App\Http\Controllers\Site;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function Store(Request $request) {
            $data= new wishlistHas();
            
            if(! auth()->user()->wishlistHas(request('productId'))){
             auth()->user()->wishlist()->attach(request('productId'));
             return "jjjjjjjjjjjjjjjjjjj";
            }

     
}
}
