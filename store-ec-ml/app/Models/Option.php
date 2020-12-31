<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Attribute;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Option extends Model
{
    use Translatable;
    protected $fillable=['attribute_id','product_id','price','status'];
    protected $with = ['translations'];
    protected $hidden = ['translations'];
    protected $translatedAttributes = ['name'];

    public function Attribute(){
        return $this->belongsTo('App\Models\Attribute','attribute_id');
    }
    public function Product(){
        return $this->belongsTo('App\Models\Product','product_id');
    }
    public function scopeActive($query)
    {
        return $query->where('Status', '0');
    }
}
