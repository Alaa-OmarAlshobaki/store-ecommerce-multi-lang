<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Translatable;
class Product extends Model
{
    use Translatable,SoftDeletes;
    protected $with=['translations'];
    protected $fillable=[
        'slug',
    ] 
}