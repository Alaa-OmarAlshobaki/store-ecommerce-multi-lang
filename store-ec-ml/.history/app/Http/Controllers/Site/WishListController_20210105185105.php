<?php

namespace App\Http\Controllers\Site;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function Store() {
        

       
            return auth()->user()->Wishlist()->attach(request('productId'));
     
}
}
