<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Index(){
        $cat=Category::get();
        return view('admin.ca',compact('cat'))
    }
}