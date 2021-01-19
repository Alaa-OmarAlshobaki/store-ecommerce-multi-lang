<?php

namespace App\Http\Controllers\Site;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SingleProductController extends Controller
{
    public function Index(Request $request,$slug){
        $data=[];
        $data['product']= Product::where('slug',$slug)->first();
        if
    
      

    }
}
