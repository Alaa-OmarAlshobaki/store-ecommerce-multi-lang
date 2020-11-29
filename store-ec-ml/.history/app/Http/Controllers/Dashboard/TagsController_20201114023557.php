<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use Illuminate\Http\Request;
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
        DB::beginTra

    }
    catch(\Exception $ex){
        DB::rollback();
        return redirect()->back()->with('fail',__('admin/error.msg_error_back'));
    }
    
}

}