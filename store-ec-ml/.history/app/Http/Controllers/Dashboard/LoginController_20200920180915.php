<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use 

class LoginController extends Controller
{
    public function ViewLogin()
    {
        return view('admin.login');
    }
    public function Login(Request $request)
    {
        return $request;
    }
}