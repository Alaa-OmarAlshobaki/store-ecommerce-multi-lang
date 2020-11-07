<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\categoryValidRequest;

class MainCategoryController extends Controller
{
    public function Index($type){
    //Category::whereNull('parent_id')->paginate(15); .......1
    //Category::where('parent_id',null)->paginate(10);.......2 
    ###########
    ### ----- 1. make method for parent to give me category only on model
    ### ----- 2. make const for pagination on file helper for all constance 
    ###########
    if($type === 'category'){
        $cate= Category::Parent()->paginate(PAGINATION_COUNT);
        return view('admin.categories.index',compact('cate'));
    }
    elseif($type==='subCategory'){
        $cate= Category::Child()->paginate(PAGINATION_COUNT);
        return view('admin.categories.index',compact('cate'));
   

    }
    
    }


    public function Edit($id){
       $cat= Category::orderBy('id', 'DESC')->find($id);
       if(!$cat)
       return redirect()->back()->with(['fail' => 'there is error on data']);
       return view('admin.categories.edit-categories',compact('cat'));

    }
    
    public function Update(categoryValidRequest $request,$id){
        try{
          
            DB::beginTransaction();
            if(!$request->has('is_active'))
            $request->request->add(['is_active'=> 1]);
            else 
            $request->request->add(['is_active'=> 0]);
            $cat= Category::find($id);
            if(!$cat)
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
          
            $cat->update($request->all());
            //save translation
            // this in table translation (name)
            $cat->name=$request->name;
            $cat->save();
            DB::commit();
            return redirect()->route('main.categories')->with('success',__('admin/error.msg_success_back'));
           
        }
        catch(\Exception $ex){
            DB::rollback();
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
        }
      
        
    }


    public function Create(){
        create-categories.blade
        return view('admin.categories.create-categories');
        
    }

    public function Store(categoryValidRequest $request){
        try{
          
            DB::beginTransaction();
            if(!$request->has('is_active'))
            $request->request->add(['is_active'=> 1]);
            else 
            $request->request->add(['is_active'=> 0]);
         
            $cat=Category::create($request->except(['_token','MAX_FILE_SIZE']));
            //save translation
            // this in table translation (name)
            $cat->name=$request->name;
            $cat->save();
            DB::commit();
            return redirect()->route('main.categories')->with('success',__('admin/error.msg_success_back'));
           
        }
        catch(\Exception $ex){
            DB::rollback();
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
        }
        
    }


    public function Delete($id){
        try{
            $cat= Category::find($id);
            if(!$cat)
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
            $cat->delete();
            return redirect()->route('main.categories')->with('success',__('admin/error.msg_success_back'));
        }
        catch(\Exception $ex)
        {  return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
        }  
      
        
    }
}