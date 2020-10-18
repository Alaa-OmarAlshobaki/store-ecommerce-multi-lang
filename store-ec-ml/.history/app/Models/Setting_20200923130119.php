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
        if (is_array($value) ){
            $value = json_encode($value);
            
        }
        static::updateOrCreate(['key'=>$key],['plane_value'=>$value]);
    }
    
    public static function setTranslatableSettings($settings=[]){
        foreach($settings as $key =>$value ){
            static::updateOrCreate
        }
    }
    
}