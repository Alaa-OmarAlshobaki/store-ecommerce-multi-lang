<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidVerfiyRequest;
use App\HTTP\Serves\verificationCodeServ;

class VerificationCodeController extends Controller
{
    public $verificationService;
    public function __construct(verificationCodeServ $verificationService)
    {
        
    }
    public function verify(ValidVerfiyRequest $request)
    {

        return $request;
    }
}