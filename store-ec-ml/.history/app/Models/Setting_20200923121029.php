<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table="settings";
    protected $fillable=['key','is_translatable','plain_value'];
    protected $cast=[] 
}