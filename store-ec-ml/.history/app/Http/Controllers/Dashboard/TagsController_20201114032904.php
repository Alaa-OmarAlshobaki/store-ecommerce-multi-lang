<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagsValidRequest;

class TagsController extends Controller
{
####################################
######## main tags #################
public function Index(){
    $tags=Tag::orderBy('id','DESC')->get();
    return view('admin.tags.index',compact('tags'));

    
}
####################################
######## edit tags #################
public function Edit($id){
    $tag=Tag::find($id);
    if(!$tag)
    return redirect()->back()->with(['fail' => 'there is error on data']);
    return view('admin.tags.edit-tags',compact('tag'));
    
}
####################################
######## update tags #################
public function Update(TagsValidRequest $request,$id){
    try{
       
        DB::beginTransaction();
        $tag=Tag::find($id);
        if(!$tag)
        return redirect()->back()->with(['fail' => 'there is error on data']);
        $tag->update($request->except('_token'));
         //save translation
        // this in table translation (name)
        $tag->name=$request->name;
        $tag->save();
        DB::commit();
        return redirect()->route('main.tags')->with(['success',__('admin/error.msg_success_back')]);

    }
    catch(\Exception $ex){
        DB::rollback();
        return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
    }
    
}
####################################
######## create tags #################
public function Create(){
 return view('admin.tags.create-tags');
}
####################################
######## store tags #################
public function Store(TagsValidRequest $request){
    try{
        DB::beginTransaction();
        $tag=Tag::create($request->except('_token'));
         //save translation
        // this in table translation (name)
        $tag->name=$request->name;
        $tag->save();
        DB::commit();
        return redirect()->route('main.tags')->with(['success',__('admin/error.msg_success_back')]);

    }
    catch(\Exception $ex){
        DB::rollback();
        return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
    }
    
}
####################################
######## delete tags #################
public function Delete(){
    try{

    }
    catch(\Exception $ex){
        DB
    }
}


}
