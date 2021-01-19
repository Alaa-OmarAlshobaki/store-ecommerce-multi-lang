<?php

namespace App\Http\Controllers\Site;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function Store(Request $request) {
        return  $request->product

       
            return auth()->user()->Wishlist()->attach(request('productId'));
     
}
}
