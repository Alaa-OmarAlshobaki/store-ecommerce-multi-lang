<?php

namespace App\Servieses;

use App\Models\VerificationCode;

Class UserVerificationCode
{
    /**set OTP code for mobile 
     * @return $data
     * 
     * 
    */
    public function erificationCode($data){
        $code=mt_rand(100000,999999);
        $data['code']=$code;
        VerificationCode::whereNotNull('user_id')->where(['user_id'=>$data['user_id']])->delete();
        return VerificationCode::create($data);

    }

    


}