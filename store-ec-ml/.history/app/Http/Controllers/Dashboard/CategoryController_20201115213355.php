<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function Index(){
    ى $cat=Category::get();
        return view('admin.cat.index',compact('cat'));
    }
}
