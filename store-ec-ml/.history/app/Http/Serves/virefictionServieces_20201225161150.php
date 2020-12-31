<?php

namespace App\HTTP\Serves;

class verificationServes
{
    /**
     * generate code then create it 
     */
    public function setVerificationCode($data)
    {
        $code = mt_rand(100000, 999999);
        $data['code']
    }
}
