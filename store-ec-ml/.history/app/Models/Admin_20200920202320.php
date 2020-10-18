<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Admin extends Authenticatable
{
    protected $table = "admins";
    // protected $guarded = ['*'];  
    public $fillable = ['name', 'email', 'password'];
    public $hidden = [''];
}