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
        return $req
        $check=$this->verificationService->checkOTPCode($request->verify_code);
        if(!$check){
            return redirect()->route('verify-user')-> withErrors(['code' => 'ألكود الذي ادخلته غير صحيح ']);

        }else{
            $this->verificationService->removeOTPCode($request->verify_code);
            return redirect()->route('home.index');
        }
    }
    public function GetForm(){
        return view('auth.verifymobile');
    }
}
