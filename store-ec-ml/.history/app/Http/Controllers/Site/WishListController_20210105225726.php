<?php

namespace App\Http\Controllers\Site;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function Store(Request $request) {
            
          $user=auth()->user()->id;
          $dat=User::where('id',$user)->first();
          if(! $dat->wishlistHas(request('productId'))){
              User::where('id',$user)->wi()->attach(request('productId'));
              return "uuuuuuuuuuuuuuuuuuu";
          }


     
}
}
