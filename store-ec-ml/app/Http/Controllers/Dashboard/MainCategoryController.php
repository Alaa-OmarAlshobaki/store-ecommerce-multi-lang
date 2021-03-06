<?php

namespace App\Http\Controllers\Dashboard;

use Validator;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\categoryValidRequest;
use App\Http\Requests\subcategoryValidRequest;

class MainCategoryController extends Controller
{ 
##########################################################################
################# index category or subcategory #########################  
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
        $cate= Category::Child()->with('Category')->paginate(PAGINATION_COUNT);
        return view('admin.subcategories.index',compact('cate'));
        
   

    }
    
    }

##########################################################################
################# edit category or subcategory #########################
    public function Edit($id,$typeEdit){
        if($typeEdit === 'category'){
       $cat= Category::orderBy('id', 'DESC')->find($id);
       if(!$cat)
       return redirect()->back()->with(['fail' => 'there is error on data']);
       return view('admin.categories.edit-categories',compact('cat'));
        }
        elseif($typeEdit ==='subcategory'){
        $category= Category::Parent()->get();
        $cat= Category::orderBy('id', 'DESC')->find($id);
       if(!$cat)
       return redirect()->back()->with(['fail' => 'there is error on data']);
       return view('admin.subcategories.edit-subcategories',compact('cat','category'));
        }

    }
##########################################################################
################# update category or subcategory #########################    
    public function Update(categoryValidRequest $request,$id,$typeUpdate){
        if($typeUpdate === 'category'){
            $this->validate($request,[
                'slug'=>'required|unique:categories,slug,'.$request->id,
                'name'=>'required',
            ]);
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
            return redirect()->route('main.categories','category')->with('success',__('admin/error.msg_success_back'));
           
        }
        catch(\Exception $ex){
            DB::rollback();
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
        }
    }elseif($typeUpdate === 'subcategory'){
        $this->validate($request,[
            'slug'=>'required|unique:categories,slug,'.$request->id,
            'name'=>'required',
            'parent_id'=>'required|exists:categories,id'
        ]);
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
            return redirect()->route('main.categories','subCategory')->with('success',__('admin/error.msg_success_back'));
           
        }
        catch(\Exception $ex){
            DB::rollback();
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
        }

    }
      
        
    }


    public function Create($typeCreate){
        if($typeCreate === 'category'){
        return view('admin.categories.create-categories');
        }
        elseif($typeCreate === 'subcategory'){
        $cate= Category::Parent()->orderBy('id','DESC')->get();
        return view('admin.subcategories.create-subcategories',compact('cate'));
        }
        
    }
##########################################################################
################# store category or subcategory #########################
    public function Store(Request $request,$typeStore){
        if($typeStore === 'category'){
            $this->validate($request,[
                'slug'=>'required|unique:categories,slug',
                'name'=>'required'
            ]);
           
           
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
            return redirect()->route('main.categories','category')->with('success',__('admin/error.msg_success_back'));
           
        }
        catch(\Exception $ex){
            DB::rollback();
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
        }
    }elseif($typeStore === 'subcategory'){
        $this->validate($request,[
            'slug'=>'required|unique:categories,slug',
            'name'=>'required',
            'parent_id'=>'required|exists:categories,id'
        ]);

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
            return redirect()->route('main.categories','subCategory')->with('success',__('admin/error.msg_success_back'));
        }
        catch(\Exception $ex){
            DB::rollback();
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
        }
    }
        
    }
##########################################################################
################# delete category or subcategory #########################
    public function Delete($id,$typeDelete){
        if($typeDelete === 'category'){
        try{
            $cat= Category::find($id);
            if(!$cat)
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
            $cat->translations()->delete();
            $cat->delete();
            return redirect()->route('main.categories','category')->with('success',__('admin/error.msg_success_back'));
        }
        catch(\Exception $ex)
        {  return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
        }  
      
    
    }elseif($typeDelete === 'subcategory'){
        try{
            $cat= Category::find($id);
            if(!$cat)
            return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
            $cat->translations()->delete();
            $cat->delete();
            return redirect()->route('main.categories','subCategory')->with('success',__('admin/error.msg_success_back'));
        }
        catch(\Exception $ex)
        {  return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
        }  
      
    }}

    
}