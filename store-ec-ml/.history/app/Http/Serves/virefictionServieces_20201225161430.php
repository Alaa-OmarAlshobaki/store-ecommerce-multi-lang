<?php

namespace App\HTTP\Serves;

use App\Models\VerificationCode;

class verificationServes
{
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
        VerificationCode::whereNotNull('user_id')->where(['user_id'=>$data])
    }
}
