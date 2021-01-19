<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleProductController extends Controller
{
    public function Index(Request $request,$slug){
        $data=[];
        $data['product']= Product::where('slug',$slug)->first();
        
      

    }
}
