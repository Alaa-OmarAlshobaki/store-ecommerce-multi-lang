<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model
{
    public $table="verification_codes";
    protected $fillable=['user_id','verify_code'];
   
}
