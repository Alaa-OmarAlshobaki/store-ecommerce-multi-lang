<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table="sliders";
    protected $fillable=['photo'];
    public function getPhotoAttribute($val){
        return ($val !== null) ? asset('storage/uploads/slider/'.$val) : "";
    }
}
