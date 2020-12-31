<?php

namespace App\HTTP\Serves;
use App\Models\User;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Auth;
class verificationCodeServ
{
    /** set OTP code for mobile
     * @param $data
     *
     * @return VerificationCode
     */
    /**
     * generate code then create it 
     */
    public function setVerificationCode($data)
    {
        /**
         * store data as array because the user has many verify code
         */
        $code = mt_rand(100000, 999999);
        $data['code']=$code;
        // return $data;
       
        /**
         * if user has verify code delete it before create new verify code 
         */
        VerificationCode::whereNotNull('user_id')->where(['user_id'=>$data['user_id']])->delete();

        $data=VerificationCode::create($data);
        return $data;
        dd($data);
       

    }

    public function getSMSVerifyMessageByAppName($code){
        $message = " is your verification code for your account";
        return $code.$message;

    }
}