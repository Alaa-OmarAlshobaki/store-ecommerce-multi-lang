<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function CategoryBySlug($slug){
        $data=[];
        $data['cat']=Category::where('slug',$slug)->first();
        if($data['cat'])
        return $data['cat']->Product();
        

    }

}
