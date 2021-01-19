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
      
            return $this->belongsTo('App\Models\Role', 'role_id');
      
    }

    public function setPasswordAttribute($value)
    {
        if($value != ""){
            $this->attributes['password'] = bcrypt($value);
        }
    }

    public function hasAbility($permissions){
        $role = $this->role;
        if(!$role)
        {
            return false;

        }
        foreach($role->permissions as $)
        

    }

    
}