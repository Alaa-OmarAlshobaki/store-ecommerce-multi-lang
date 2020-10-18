<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function ViewProfile(){
       $admin= Admin::find(Auth::guard('admin')->user()->id);
       return view('admin.profile',compact('admin'));
    }

    public function EditProfile(){
        $admin=Admin::find(Auth::guard('admin')->user()->id);
        return view('admin.edit-profile',compact('admin'));
    
    }
    public function UpdateProfile(UpdateProfileRequest $request){
        try{


            return redirect()->back()->with()
        }catch(/Exception $ex){

        }
        
    }

    public function ResetPass(){
        $admin= Admin::find(Auth::guard('admin')->user()->id);
        return view('admin.reset-pass',compact('admin'));
    }
  
}
