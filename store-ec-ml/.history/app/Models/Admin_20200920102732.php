<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admins";
    // protected $guarded = ['];  
    public $fillable = ['name', 'email', 'password'];
    public $hidden = [''];
}