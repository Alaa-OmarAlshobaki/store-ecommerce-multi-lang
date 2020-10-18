<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainCategoryController extends Controller
{
    public function Index(){
    //Category::whereNull('parent_id')->paginate(15); .......1
    Category::where('parent_id',null)->paginate()
   
    }
}
