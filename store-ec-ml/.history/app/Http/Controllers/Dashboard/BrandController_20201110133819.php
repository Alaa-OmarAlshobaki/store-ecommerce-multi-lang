<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
##########################################################################
############################ main of brand ###############################
  public function Index(){
      $brand=Brand::orderBy('id','DESC')->paginate(PAGINATION_COUNT);
      return view('admin.brand.index',compact('brand'));

  }
##########################################################################
############################ create of brand #############################

}
