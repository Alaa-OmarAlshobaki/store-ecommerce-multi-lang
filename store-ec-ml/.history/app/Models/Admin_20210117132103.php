<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    protected $table = "admins";
    // protected $guarded = ['*'];  
    public $fillable = ['name', 'email', 'password','role_id'];
    public $hidden = [''];

    public function Role(){
        return $this->
    }
}