<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainCategoryController extends Controller
{
    public function Index(){
    Category::whereNull('parent_id')->paginate
    }
}