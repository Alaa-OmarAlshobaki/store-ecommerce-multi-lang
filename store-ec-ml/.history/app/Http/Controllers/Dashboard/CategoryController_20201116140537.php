<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\GeneralTraites;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CatValidationRequest;


class CategoryController extends Controller
{
    use GeneralTraites;
    public function Index(){
        $cat=Category::orderBy('id','DESC')->paginate(PAGINATION_COUNT);
        return view('admin.cat.index',compact('cat'));
    }
    public function Create(){
        $cate=Category::Parent()->orderBy('id','DESC')->get();
        return view('admin.cat.create-cat',compact('cate'));
    }
    public function Store(CatValidationRequest $request){
        try{
            DB::beginTransaction();
                if ($request->has('is_active')){
                    $request->request->add(['is_active'=> 1]);
                }else{
                    $request->request->add(['is_active'=> 0]);
                }
                if ($request->type == 1){
                    $request->request->add(['parent_id'=> null]);
                }
                $fileName="";
                if($request->has('image')){
                    $fileName=$this->uploadImage('category',$request->image);
                }
                $cat=Category::create($request->except('_token','image'));
                $cat->name=$request->name;
                $cat->image=$fileName;
                $cat->save();
            DB::commit();
            return redirect()->route('main.cat')->with('success',__('admin/error.msg_success_back'));

        }
        catch(\Exception $ex){
            DB::rollback();

        }
     }

}
