<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
     $cate= Category::Parent()->paginate(PAGINATION_COUNT);
     return view('admin.categories.index',compact('cate'));
    }


    public function Edit($id){
       $cat= Category::find($id);
       if(!$cat)
       return redirect()->back()->with(['fail' => 'there is error on data']);
       return view('admin.categories.edit-categories',compact('cat'));
        
    }
    
    public function Update(categoryValidRequest $request,$id){

        try{
            if(!$request->has('is_active'))
            $request->request->add(['is_active'=> 0]);
            else 
            $request->request->add(['is_active'=> 1]);
            $cat= Category::find($id);
            if(!$cat)
            return redirect()->back()->with(['fail' => 'there is error on data']);
            $cat->update($request->all());
            $cat->name=
        }
        catch(\Exception $ex){
            DB::rollback();
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
        }
      
        
    }
}