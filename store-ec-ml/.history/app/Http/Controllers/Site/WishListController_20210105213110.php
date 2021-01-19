<?php

namespace App\Http\Controllers\Site;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function Store(Request $request) {
            
          $user=auth()->user()->id;
        //   if(! User::where('id',$user)->wishlistHas(request('productId'))){
        $data=  User::where('id',$user)->with('wishlist')->first();
        $data->attach(request('productId'));
        return 
        //       return response() -> json(['status' => true , 'wished' => true]);
        //   }
        //   return response() -> json(['status' => true , 'wished' => false]);


     
}
}
