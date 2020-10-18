<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ProfileController extends Controller
{
    public function ViewProfile(){
       $admin =Auth::guard('admin');
        return $admin;
    }
}
