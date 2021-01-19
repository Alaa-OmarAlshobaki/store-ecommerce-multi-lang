<?php

namespace App\Http\Controllers\Site;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function Store(Request $request) {
            $data= request('productId');
            if(! auth()->user()->wishlistHas($data){
            // //  auth()->user()->wishlist()->attach(request($data));
            // //  return "jjjjjjjjjjjjjjjjjjj";
            // }

     
}
}
