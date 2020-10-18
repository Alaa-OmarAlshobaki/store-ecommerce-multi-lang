<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table="settings";
    protected $fillable=['key','is_translatable','plain_value'];
    protected $cast=['is_translatable'=>'boolean']; 
    public static function setMany($settings){
        foreach ($settings as $key => $value) {
          self::set($key,$value);
        }
        
    }

    public static function set($key,$value){
        if($key === 'translatable'){
            return static::setTranslatableSettings($value);
        }
        static::updateOrCreate(['key'])
    }
}