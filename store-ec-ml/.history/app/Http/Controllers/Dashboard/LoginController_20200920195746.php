<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Requests\validLogin;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function ViewLogin()
    {
        return view('admin.login');
    }
    public function Login(validLogin $request)
    {
        $remember=$request->has('remember_me')?true:false;
        if(Auth::guard('admin')->attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
            $remember
        ])){
            return redirect()->route('admin.index');
        }
        return
        
    }
}