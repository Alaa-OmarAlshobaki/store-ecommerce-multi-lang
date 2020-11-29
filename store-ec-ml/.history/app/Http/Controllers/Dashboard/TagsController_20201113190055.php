<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
####################################
######## main tags #################
public function Index(){
    return $tags=Tag::orderBy('id','DESC')->get();

    
}
####################################
######## edit tags #################
public function Edit(tagsValidRequest $request){
    return $tags=Tag::orderBy('id','DESC')->get();

    
}

}
