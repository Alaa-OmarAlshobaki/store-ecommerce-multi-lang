<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Traits\GeneralTraites;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    use GeneralTraites;
    public function ViewImages(){
        $slider=Slider::get(['photo']);
        return view('admin.slider.slider',compact('slider'));
    }

    public function StoreImages(Request $request){
        $file=$request->file('dzfile');
        $filename=uploadImage('slider',$file);
        return response()->json([
            'name'=>$filename,
            'original_name' => $file->getClientOriginalName(),

        ])

    }
}
