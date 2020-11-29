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
    return view('admin.brand.index-brand',compact('brand'))

    
}
####################################
######## edit tags #################
public function Edit(TagsValidRequest $request,$id){
    return $tags=Tag::orderBy('id','DESC')->get();

    
}

}
