<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function ViewProfile(){
       $admin= Auth::guard('admin')->user();
       return view('admin.profile',compact('admin'));
    }

    public function EditProfile(){
        $admin= Auth::guard('admin')->user();
        return view('admin.edit-profile',compact('admin'));
    
    }
    public function UpdateProfile()

    public function ResetPass(){
        $admin= Auth::guard('admin')->user();
        return view('admin.reset-pass',compact('admin'));
    }
  
}
