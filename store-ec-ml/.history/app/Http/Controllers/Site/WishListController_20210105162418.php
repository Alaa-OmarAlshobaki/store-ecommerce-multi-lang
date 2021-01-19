<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function Store(){
        if(! auth()->user()->WishListHas(request('productId'))){
            auth()->user()->Wishlist()->att
        }
      
        
    }
}
