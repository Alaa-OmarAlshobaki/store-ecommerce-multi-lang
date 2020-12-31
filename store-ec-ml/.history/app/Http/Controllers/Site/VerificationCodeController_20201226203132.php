<?php

namespace App\Http\Controllers\Site;

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
        if(!$check){
            /**
             * if the code enter filed return to the same page (verify page
             */
            return redirect()->route('verifyPage')-> withErrors(['code' => 'ألكود الذي ادخلته غير صحيح ']);

        }else{
            /**
             * if the code enter correct 
             * redirect to home page and 
             * delete verify code from table verify
             */
            $this->verificationService->removeOTPCode($request->verify_code);
            return redirect()->route('home');
        }
    }
    public function GetForm(){
        return view('auth.verifymobile');
    }
}
