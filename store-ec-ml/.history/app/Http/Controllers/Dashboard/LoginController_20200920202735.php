<?php

namespace App\Http\Controllers\Dashboard;

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
            'email' => $request->input('email'),
            'password' => $request['password']
            $remember
        );
        if (Auth::guard('admin')->attempt($admin)) {
            return redirect()->route('admin.index');
        }
        return redirect()->back()->with(['error' => 'There is an error with the data']);
    }
}