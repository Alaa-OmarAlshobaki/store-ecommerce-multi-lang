<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\categoryValidRequest;

class MainCategoryController extends Controller
{
    public function Index(){
    //Category::whereNull('parent_id')->paginate(15); .......1
    //Category::where('parent_id',null)->paginate(10);.......2 
    ###########
    ### ----- 1. make method for parent to give me category only on model
    ### ----- 2. make const for pagination on file helper for all constance 
    ###########
     return $cate= Category::Parent()->paginate(PAGINATION_COUNT);
     return view('admin.categories.index',compact('cate'));
    }


    public function Edit($id){
        Category::find
        
    }
}