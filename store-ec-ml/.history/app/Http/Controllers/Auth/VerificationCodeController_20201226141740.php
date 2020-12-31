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
        $this->verificationService=$verificationService;
    }
    public function verify(ValidVerfiyRequest $request)
    {
        $check=$this->verificationService->checkOTPCode($request->verify_code);
        if(!check){

        }else{
            $this->verificationService->removeOTPCode($request->)
        }
    }
}
