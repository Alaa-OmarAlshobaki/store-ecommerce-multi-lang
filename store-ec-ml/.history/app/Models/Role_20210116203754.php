<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table="roles";
    protected $fillable=['name','permissions'];
    public function users(){
        $this->hasMany(User::class);
    }

    public function getPermissionsAttribute($permissions){
        return json_decode
    }
    //
}
