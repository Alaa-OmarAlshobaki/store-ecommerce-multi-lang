<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidVerfiyRequest;

class VerificationCodeController extends Controller
{
    public function __construct()
    {
        
    }
    public function verify(ValidVerfiyRequest $request)
    {

        return $request;
    }
}
