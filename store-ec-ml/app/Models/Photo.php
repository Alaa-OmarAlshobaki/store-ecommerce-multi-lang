<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table="photos";
    protected $fillable=['photo','product_id','photo_type'];

    public function Product()
    {
        return $this->belongsToMany(Product::class, 'product_id');
    }
    public function getPhotoAttribute($val){
      
        return ($val !== null) ? asset('storage/uploads/product/'.$val) : "";
    }
}
