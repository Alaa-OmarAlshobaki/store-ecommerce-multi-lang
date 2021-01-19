<?php

namespace App\Http\Controllers\Site;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController 
{
    public function Store(Request $request)   {

        if (! auth()->user()->wishlistHas(request('productId'))) {
            auth()->user()->VerifyCode()->attach(request('productId'));
            return response() -> json(['status' => true , 'wished' => true]);
        }
        return response() -> json(['status' => true , 'wished' => false]);  // added before we can use enumeration here
    }
}
