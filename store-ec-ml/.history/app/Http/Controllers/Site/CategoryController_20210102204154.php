<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function CategoryBySlug($slug){
        $data=[];
        $data['cat']=Category::where('slug',$slug)

    }

}
