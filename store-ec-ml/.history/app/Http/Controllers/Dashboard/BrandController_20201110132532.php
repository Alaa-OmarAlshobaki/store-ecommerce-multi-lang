<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
  public function Index(){
      $brand=Brand::orderBypaginate(PAGINATION_COUNT);
      return view('admin.brand.index',compact('brand'));

  }
}
