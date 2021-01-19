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
        if(!$data['product'])
        return redirect()->back()->with(['fail' => 'cant found product for this data']);
        $productId=
    
      

    }
}
