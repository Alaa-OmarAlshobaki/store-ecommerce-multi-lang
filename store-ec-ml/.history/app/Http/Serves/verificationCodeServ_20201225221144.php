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
        $verify_code = mt_rand(100000, 999999);
        $data['verify_code']=$verify_code;
        // return $data;
       
        /**
         * if user has verify code delete it before create new verify code 
         */
        VerificationCode::whereNotNull('user_id')->where(['user_id'=>$data['user_id']])->delete();
/**
 * ؤقثشفث ؤخيث 
 */
        $user=VerificationCode::create($data);
        return $user;
       

    }

    public function getSMSVerifyMessageByAppName($code){
        $message = " is your verification code for your account";
        return $code.$message;

    }
}
