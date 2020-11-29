<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Traits\GeneralTraites;
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
    // try{
        
        DB::beginTransaction();
        if(!$request->has('is_active'))
        $request->request->add(['is_active'=> 1]);
        else 
        $request->request->add(['is_active'=> 0]);
     return $request->data;
        if(!$request->has('data')){
            $filePath= UploadImage('brands',$request->data);
        }
     
        $cat=Brand::create($request->except(['_token','image','MAX_FILE_SIZE']));
        //save translation
        // this in table translation (name)
        $cat->name=$request->name;
        $cat->image=$filePath;
        $cat->save();
        DB::commit();
        return redirect()->route('main.brands')->with('success',__('admin/error.msg_success_back'));
       
    // }
    // catch(\Exception $ex){
    //     DB::rollback();
    //     return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
    // }

 }
}
