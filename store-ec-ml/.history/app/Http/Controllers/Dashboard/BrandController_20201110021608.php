<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
  public function Index(){
      $brand=Brand::paginate(PAGINATION_COUNT);
      re

  }
}