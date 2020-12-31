<?php

namespace App\Servieses;

Class SMSServies
{
    /**set OTP code for mobile 
     * @return $data
     * 
     * 
    */
    public function serVerificationCode($data){
        $code=mt_rand(1000000,999999);
        $data['code']=$code;
        VerificationCode::whereNotNull('user')
    }

    


}