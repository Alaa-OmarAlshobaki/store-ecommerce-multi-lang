<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests\validLogin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function ViewLogin()
    {
        return view('admin.login');
    }
    public function Login(validLogin $request)
    {
        $remember = $request->has('remember_me') ? true : false;

        $admin = array(
            'email' => $request['email'],
            'password' => $request['password'],

        );
        if (Auth::guard('admin')->attempt($admin)) {
            return redirect()->route('admin.index');
        }
        // return redirect()->route('admin.login')->with('fail', 'error');
        return redirect()->back()->with(['fail'=>'Profile updated!']);
        // return view('admin.login')->with('fail', 'error');
    }
}