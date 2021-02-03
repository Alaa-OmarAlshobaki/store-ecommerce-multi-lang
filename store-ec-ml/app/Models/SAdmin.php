<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class SAdmin extends Authenticatable
{
    protected $table = "s_admins";
    // protected $guarded = ['*'];  
    public $fillable = ['name', 'email', 'password'];
}
