<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function ViewProfile(){
       $admin= Auth::guard('admin')->user();
       return view('');
    }

    public function EditProfile(){
    

    }
  
}