<?php

namespace App\Http\Services;

use App\Models\User;
use App\Models\User_verfication;
use Illuminate\Support\Facades\Auth;


class VerificationServices
{
    /** set OTP code for mobile
     * @param $data
     *
     * @return User_verfication
     */
    public function setVerificationCode($data)
    {
        $code = mt_rand(100000, 999999);
        $data['code'] = $code;
        VerificationCode::whereNotNull('user_id')->where(['user_id' => $data['user_id']])->delete();
        return VerificationCode::create($data);
    }

    public function getSMSVerifyMessageByAppName( $code)
    {
            $message = " is your verification code for your account";
             return $code.$message;
    }


    public function checkOTPCode ($code){

        if (Auth::guard()->check()) {
            $verificationData = User_verfication::where('user_id',Auth::id()) -> first();

            if($verificationData -> code == $code){
                User::whereId(Auth::id()) -> update(['email_verified_at' => now()]);
                return true;
            }else{
                return false;
            }
        }
        return false ;
    }


    public function removeOTPCode($code)
    {
        User_verfication::where('code',$code) -> delete();
    }

}