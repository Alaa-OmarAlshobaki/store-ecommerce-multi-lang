<?php

namespace App\Http\Controllers\Site;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController extends Controller
{

    public function Index(){
        $user=auth()->user()->id;
        $dat=User::where('id',$user)->first();
        $dat->wishlist()
        ->latest()
        ->get();
        


    }
    public function Store(Request $request) {
            
          $user=auth()->user()->id;
          $dat=User::where('id',$user)->first();
          if(! $dat->wishlistHas(request('productId'))){
            $dat->wishlist()->attach(request('productId'));
            return response() -> json(['status' => true , 'wished' => true]);
          }
          return response() -> json(['status' => true , 'wished' => false]);


     
}
}
