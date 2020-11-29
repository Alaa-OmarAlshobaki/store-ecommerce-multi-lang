<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandValidRequest;

class BrandController extends Controller
{
    use GeneralTraites;
##########################################################################
############################ main of brand ###############################
  public function Index(){
      $brand=Brand::orderBy('id','DESC')->paginate(PAGINATION_COUNT);
      return view('admin.brand.index',compact('brand'));

  }
##########################################################################
############################ create of brand #############################

 public function Create(){
     return view('admin.brand.create-brand');

 }
##########################################################################
############################ store of brand #############################

 public function Store(BrandValidRequest $request){
  
    DB::beginTransaction();

    //validation

    if (!$request->has('is_active'))
        $request->request->add(['is_active' => 0]);
    else
        $request->request->add(['is_active' => 1]);


    $fileName = "";
    if ($request->has('image')) {

        $fileName = uploadImage('brands', $request->photo);
    }

    $brand = Brand::create($request->except('_token', 'image'));

    //save translations
    $brand->name = $request->name;
    $brand->photo = $fileName;

    $brand->save();
    DB::commit();
    return redirect()->route('admin.brands')->with(['success' => 'تم ألاضافة بنجاح']);

 }

 
}
